<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Http\Middleware\RedirectIfNotAdmin;
use App\Models\Admin;
use DataTables;
use Auth;


class AdminsLoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->tb_admin = new Admin();        
    }

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
            $data = $this->tb_admin->select_all_admin($search);
            return Datatables::of($data)
                        ->addIndexColumn()
                        ->rawColumns(['action'])
                        ->make(true);
        }

        return view('admins.index', compact('guard'));
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

        return view('admins.create',compact('guard'));
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
        //dd($request);
        $validator = $this->isvalid($request);

        $data = $request->toArray();

        /*if ($validator->fails()) {

            if($data['password'] == $data['password_confirmation'])
            {
                $insert = $this->tb_admin->store($data);
            }
            else
            {
                return back()->withInput()->withErrors($validator->messages());
            }
        }
        else
        {*/
            $insert = $this->tb_admin->store($data);
        //}

        if($insert)
        {
            return redirect()->route('admins')->with('success', 'Data berhasil ditambahkan.');
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

        $admin = $this->tb_admin->select_one($id);
        return view('admins.detail', compact('admin','guard'));
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

        $admin = $this->tb_admin->select_one($id);
        return view('admins.edit', compact('admin','guard'));
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
                $update = $this->tb_admin->modify($data, $id);
            }
            else
            {
                return back()->withInput()->withErrors($validator->messages());
            }
        }
        else
        {*/
            $update = $this->tb_admin->modify($data, $id);
        //}

        if($update)
        {
                return redirect()->route('admins')
            ->with('success', 'Data Berhasil Diperbaharui');    
            
        }
    }

    public function destroy($id)
    {
        $delete = $this->tb_admin->remove($id);
        if($delete){
            return redirect()->route('admins')
            ->with('success', 'Akun Berhasil Dihapus');
        }
        
    }

    public function check(Request $request)
    {
        //echo 'CHECK';
        $request = $request->all();
        $check = $this->tb_admin->check($request);
        return response()->json($check);
    }
}
