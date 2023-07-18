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

class CustomerController extends Controller
{
    use AuthenticatesUsers;
    protected $tb_customer;
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
        if (Auth::check()) {
            $guard = Auth::user();
            
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
        } elseif (Auth::guard('customer')->check()) {
            $guard = Auth::guard('customer')->user();
        } elseif (Auth::guard('driver')->check()) {
            $guard = Auth::guard('driver')->user();
        } else {
            $this->middleware('guest')->except('logout');
        }

        if ($request->ajax()) {

            $search = (empty($request->input('search'))) ? '' : $request->input('search');
            $data = $this->tb_customer->select_all_ajax($search);
            return Datatables::of($data)
                        ->addIndexColumn()
                        ->rawColumns(['action'])
                        ->make(true);
        }
        return view('users.index',compact('guard'));
    }

    public function create()
    {
        if (Auth::check()) {
            $guard = Auth::user();
            
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
        } elseif (Auth::guard('customer')->check()) {
            $guard = Auth::guard('customer')->user();
        } elseif (Auth::guard('driver')->check()) {
            $guard = Auth::guard('driver')->user();
        } else {
            $this->middleware('guest')->except('logout');
        }

        return view('users.create',compact('guard'));
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

    public function store(Request $request)
    {
        if (Auth::check()) {
            $guard = Auth::user();
            
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
        } elseif (Auth::guard('customer')->check()) {
            $guard = Auth::guard('customer')->user();
        } elseif (Auth::guard('driver')->check()) {
            $guard = Auth::guard('driver')->user();
        } else {
            $this->middleware('guest')->except('logout');
        }

        $data['photo'] = null;
        $filename = null;
        if($request->file('photo') !== null){
                $file= $request->file('photo');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('/upload/profile'), $filename);
            }

        $data = $request->toArray();
        $data['photo']= $filename;

        $insert = $this->tb_customer->store($data);
        //dd($request);
        /*$validator = $this->isvalid($request);

            if($request->file('photo') !== null){
                $file= $request->file('photo');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('/upload/profile'), $filename);
            }

        $data = $request->toArray();
        $data['photo']= $filename;

        if ($validator->fails()) {

            if($data['password'] == $data['password_confirmation'])
            {
                $insert = $this->tb_customer->store($data);
            }
            else
            {
                return back()->withInput()->withErrors($validator->messages());
            }
        }
        else
        {*/
            
        //}

        if($insert)
        {
            return redirect()->route('customers')->with('success', 'Data berhasil ditambahkan.');
        }

    }

    public function show($id)
    {
        if (Auth::check()) {
            $guard = Auth::user();
            
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
        } elseif (Auth::guard('customer')->check()) {
            $guard = Auth::guard('customer')->user();
        } elseif (Auth::guard('driver')->check()) {
            $guard = Auth::guard('driver')->user();
        } else {
            $this->middleware('guest')->except('logout');
        }

        $user = $this->tb_customer->select_one($id);
        return view('users.detail', compact('user','guard'));
    }
     
    public function edit($id)
    {
        if (Auth::check()) {
            $guard = Auth::user();
            
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
        } elseif (Auth::guard('customer')->check()) {
            $guard = Auth::guard('customer')->user();
        } elseif (Auth::guard('driver')->check()) {
            $guard = Auth::guard('driver')->user();
        } else {
            $this->middleware('guest')->except('logout');
        }

        $user = $this->tb_customer->select_one($id);
        return view('users.edit', compact('user','guard'));
    }

    public function update(Request $request, $id)
    {
        
        //dd($request);
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
        //dd($data);

        /*if ($validator->fails()) {

            if($data['password'] == $data['password_confirmation'])
            {
                $update = $this->tb_customer->modify($data, $id);
            }
            else
            {
                return back()->withInput()->withErrors($validator->messages());
            }
        }
        else
        {

                    $update = $this->tb_customer->modify($data, $id);
        }*/
        $update = $this->tb_customer->modify($data, $id);
        if($update)
        {
            if($data['url'] == 'profile')
            {
                return redirect()->route('profile', $id)
            ->with('success', 'Data Berhasil Diperbaharui');
            }else{
                return redirect()->route('customers')
            ->with('success', 'Data Berhasil Diperbaharui');    
            }
            
        }
    }

    public function destroy($id)
    {
        if (Auth::check()) {
            $guard = Auth::user();
            
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
        } elseif (Auth::guard('customer')->check()) {
            $guard = Auth::guard('customer')->user();
        } elseif (Auth::guard('driver')->check()) {
            $guard = Auth::guard('driver')->user();
        } else {
            $this->middleware('guest')->except('logout');
        }

        $delete = $this->tb_customer->remove($id);
        if($delete){
            return redirect()->route('customers')
            ->with('success', 'Akun Berhasil Dihapus');
        }
        
    }
}
