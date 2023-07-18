<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Customer;
use App\Models\Admin;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DataTables;
use Auth;

class UserController extends Controller
{
    use AuthenticatesUsers;
    protected $tb_customer;
    protected $tb_admin;
    protected $tb_driver;
    protected $guard;
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->tb_customer = new Customer();
        $this->tb_admin = new Admin();
        $this->tb_driver = new Driver();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    }

    public function isvalid(Request $request)
    {
        $rules = [
            'fullname' => 'required|string',
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
            'address' => 'required',
            'phone' => 'required|numeric',
            'level' => ['required'],
        ];

        $messages = [
            'password.min' => 'Password harus berisi minimal 8 karakter',
            'password_confirmation.same' => 'Password harus sesuai',
            'phone.numeric' => 'Nomor telepon harus berisi angka',
        ];

        $data = $request->toArray();

        $validator = Validator::make($data, $rules, $messages);

        return $validator;
    }

    public function profile_show($id)
    {
        if (Auth::check()) {
            $guard = Auth::user();
            $user = $this->tb_customer->select_one($id);    
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
            $user = $this->tb_admin->select_one($id);
        } elseif (Auth::guard('customer')->check()) {
            $guard = Auth::guard('customer')->user();
            $user = $this->tb_customer->select_one($id);
        } elseif (Auth::guard('driver')->check()) {
            $guard = Auth::guard('driver')->user();
            $user = $this->tb_driver->select_one($id);
        } else {
            $this->middleware('guest')->except('logout');
        }

        
        return view('users.detail', compact('user','guard'));
    }
     
    public function profile_edit($id)
    {
         if (Auth::check()) {
            $guard = Auth::user();
            $user = $this->tb_customer->select_one($id);    
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
            $user = $this->tb_admin->select_one($id);
        } elseif (Auth::guard('customer')->check()) {
            $guard = Auth::guard('customer')->user();
            $user = $this->tb_customer->select_one($id);
        } elseif (Auth::guard('driver')->check()) {
            $guard = Auth::guard('driver')->user();
            $user = $this->tb_driver->select_one($id);
        } else {
            $this->middleware('guest')->except('logout');
        }

        return view('users.edit', compact('user','guard'));
    }

    public function profile_update(Request $request, $id)
    {
        
        $validator = $this->isvalid($request);
        
        $data['photo'] = null;
        $filename = null;

            if($request->file('photo') !== null){
                $file= $request->file('photo');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('/upload/profile'), $filename);
            }

        $data = $request->toArray();
        $data['photo']= $filename;

        /*if ($validator->fails()) {

            if($data['password'] == $data['password_confirmation'])
            {
                if (Auth::check()) {
                    $update = $this->tb_customer->modify($data, $id);
                } elseif (Auth::guard('admin')->check()) {
                    $update = $this->tb_admin->modify($data, $id);
                } elseif (Auth::guard('customer')->check()) {
                    $update = $this->tb_customer->modify($data, $id);
                } elseif (Auth::guard('driver')->check()) {
                    $update = $this->tb_driver->modify($data, $id);
                }
            }
            else
            {
                return back()->withInput()->withErrors($validator->messages());
            }
        }
        else
        {*/
          //  dd($data);
                if (Auth::check()) {
                    $update = $this->tb_customer->modify($data, $id);
                } elseif (Auth::guard('admin')->check()) {
                    $update = $this->tb_admin->modify($data, $id);
                } elseif (Auth::guard('customer')->check()) {
                    $update = $this->tb_customer->modify($data, $id);
                } elseif (Auth::guard('driver')->check()) {
                    $update = $this->tb_driver->modify($data, $id);
                }
        //}

        if($update)
        {
            if($data['url'] == 'profile')
            {
                return redirect()->route('profile', $id)
            ->with('success', 'Data Berhasil Diperbaharui');
            }else{
                return redirect()->route('users')
            ->with('success', 'Data Berhasil Diperbaharui');    
            }
            
        }
    }

    public function check(Request $request)
    {
        $request = $request->all();

        if($request['url'] == 'profile'){
            if (Auth::check()) {
                $check = $this->tb_customer->check($request);
            } elseif (Auth::guard('admin')->check()) {
                $check = $this->tb_admin->check($request);
            } elseif (Auth::guard('customer')->check()) {
                $check = $this->tb_customer->check($request);
            } elseif (Auth::guard('driver')->check()) {
                $check = $this->tb_driver->check($request);
            }
        }elseif($request['url'] == 'admins'){
            $check = $this->tb_admin->check($request);
        }elseif($request['url'] == 'drivers'){
            $check = $this->tb_driver->check($request);
        }else{
            $check = $this->tb_customer->check($request);
        }

        return response()->json($check);
        
    }
}
