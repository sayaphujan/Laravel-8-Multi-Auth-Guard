<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Admin;
use App\Models\Owner;
use App\Models\Officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DataTables;
use Auth;

class UserController extends Controller
{
    use AuthenticatesUsers;
    protected $tb_user;
    protected $guard;
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
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
        } elseif (Auth::guard('user')->check()) {
            $guard = Auth::guard('user')->user();
        } elseif (Auth::guard('owner')->check()) {
            $guard = Auth::guard('owner')->user();
        } elseif (Auth::guard('officer')->check()) {
            $guard = Auth::guard('officer')->user();
        } else {
            $this->middleware('guest')->except('logout');
        }

        $this->tb_user = new User();

        if ($request->ajax()) {

            $search = (empty($request->input('search'))) ? '' : $request->input('search');
            $data = $this->tb_user->select_all_ajax($search);
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
            $this->tb_user = new User();
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
            $this->tb_user = new Admin();
        } elseif (Auth::guard('user')->check()) {
            $guard = Auth::guard('user')->user();
            $this->tb_user = new User();
        } elseif (Auth::guard('owner')->check()) {
            $guard = Auth::guard('owner')->user();
            $this->tb_user = new Owner();
        } elseif (Auth::guard('officer')->check()) {
            $guard = Auth::guard('officer')->user();
            $this->tb_user = new Officer();
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
        } elseif (Auth::guard('user')->check()) {
            $guard = Auth::guard('user')->user();
        } elseif (Auth::guard('owner')->check()) {
            $guard = Auth::guard('owner')->user();
        } elseif (Auth::guard('officer')->check()) {
            $guard = Auth::guard('officer')->user();
        } else {
            $this->middleware('guest')->except('logout');
        }

        $this->tb_user = new User();

        $data['photo'] = null;
        $filename = null;
        
        //dd($request);
        $validator = $this->isvalid($request);

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
                $insert = $this->tb_user->store($data);
            }
            else
            {
                return back()->withInput()->withErrors($validator->messages());
            }
        }
        else
        {
            $insert = $this->tb_user->store($data);
        }

        if($insert)
        {
            return redirect()->route('users')->with('success', 'Data berhasil ditambahkan.');
        }

    }

    public function show($id)
    {
        if (Auth::check()) {
            $guard = Auth::user();
            
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
        } elseif (Auth::guard('user')->check()) {
            $guard = Auth::guard('user')->user();
        } elseif (Auth::guard('owner')->check()) {
            $guard = Auth::guard('owner')->user();
        } elseif (Auth::guard('officer')->check()) {
            $guard = Auth::guard('officer')->user();
        } else {
            $this->middleware('guest')->except('logout');
        }

        $this->tb_user = new User();

        $user = $this->tb_user->select_one($id);
        return view('users.detail', compact('user','guard'));
    }
     
    public function edit($id)
    {
        if (Auth::check()) {
            $guard = Auth::user();
            
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
        } elseif (Auth::guard('user')->check()) {
            $guard = Auth::guard('user')->user();
        } elseif (Auth::guard('owner')->check()) {
            $guard = Auth::guard('owner')->user();
        } elseif (Auth::guard('officer')->check()) {
            $guard = Auth::guard('officer')->user();
        } else {
            $this->middleware('guest')->except('logout');
        }

        $this->tb_user = new User();

        $user = $this->tb_user->select_one($id);
        return view('users.edit', compact('user','guard'));
    }

    public function update(Request $request, $id)
    {
        if (Auth::check()) {
            $guard = Auth::user();
            
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
        } elseif (Auth::guard('user')->check()) {
            $guard = Auth::guard('user')->user();
        } elseif (Auth::guard('owner')->check()) {
            $guard = Auth::guard('owner')->user();
        } elseif (Auth::guard('officer')->check()) {
            $guard = Auth::guard('officer')->user();
        } else {
            $this->middleware('guest')->except('logout');
        }

        $this->tb_user = new User();

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

        if ($validator->fails()) {

            if($data['password'] == $data['password_confirmation'])
            {
                $update = $this->tb_user->modify($data, $id);
            }
            else
            {
                return back()->withInput()->withErrors($validator->messages());
            }
        }
        else
        {
            $update = $this->tb_user->modify($data, $id);
        }

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

    public function destroy($id)
    {
        if (Auth::check()) {
            $guard = Auth::user();
            
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
        } elseif (Auth::guard('user')->check()) {
            $guard = Auth::guard('user')->user();
        } elseif (Auth::guard('owner')->check()) {
            $guard = Auth::guard('owner')->user();
        } elseif (Auth::guard('officer')->check()) {
            $guard = Auth::guard('officer')->user();
        } else {
            $this->middleware('guest')->except('logout');
        }

        $this->tb_user = new User();
        
        $delete = $this->tb_user->remove($id);
        if($delete){
            return redirect()->route('users')
            ->with('success', 'Akun Berhasil Dihapus');
        }
        
    }

    public function profile_show($id)
    {
        if (Auth::check()) {
            $guard = Auth::user();
            $this->tb_user = new User();
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
            $this->tb_user = new Admin();
        } elseif (Auth::guard('user')->check()) {
            $guard = Auth::guard('user')->user();
            $this->tb_user = new User();
        } elseif (Auth::guard('owner')->check()) {
            $guard = Auth::guard('owner')->user();
            $this->tb_user = new Owner();
        } elseif (Auth::guard('officer')->check()) {
            $guard = Auth::guard('officer')->user();
            $this->tb_user = new Officer();
        } else {
            $this->middleware('guest')->except('logout');
        }

        $user = $this->tb_user->select_one($id);
        return view('users.detail', compact('user','guard'));
    }
     
    public function profile_edit($id)
    {
        if (Auth::check()) {
            $guard = Auth::user();
            $this->tb_user = new User();
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
            $this->tb_user = new Admin();
        } elseif (Auth::guard('user')->check()) {
            $guard = Auth::guard('user')->user();
            $this->tb_user = new User();
        } elseif (Auth::guard('owner')->check()) {
            $guard = Auth::guard('owner')->user();
            $this->tb_user = new Owner();
        } elseif (Auth::guard('officer')->check()) {
            $guard = Auth::guard('officer')->user();
            $this->tb_user = new Officer();
        } else {
            $this->middleware('guest')->except('logout');
        }

        $user = $this->tb_user->select_one($id);
        return view('users.edit', compact('user','guard'));
    }

    public function profile_update(Request $request, $id)
    {
        if (Auth::check()) {
            $guard = Auth::user();
            $this->tb_user = new User();
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
            $this->tb_user = new Admin();
        } elseif (Auth::guard('user')->check()) {
            $guard = Auth::guard('user')->user();
            $this->tb_user = new User();
        } elseif (Auth::guard('owner')->check()) {
            $guard = Auth::guard('owner')->user();
            $this->tb_user = new Owner();
        } elseif (Auth::guard('officer')->check()) {
            $guard = Auth::guard('officer')->user();
            $this->tb_user = new Officer();
        } else {
            $this->middleware('guest')->except('logout');
        }

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

        if ($validator->fails()) {

            if($data['password'] == $data['password_confirmation'])
            {
                $update = $this->tb_user->modify($data, $id);
            }
            else
            {
                return back()->withInput()->withErrors($validator->messages());
            }
        }
        else
        {
            $update = $this->tb_user->modify($data, $id);
        }

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

    public function profile_destroy($id)
    {
        if (Auth::check()) {
            $guard = Auth::user();
            $this->tb_user = new User();
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
            $this->tb_user = new Admin();
        } elseif (Auth::guard('user')->check()) {
            $guard = Auth::guard('user')->user();
            $this->tb_user = new User();
        } elseif (Auth::guard('owner')->check()) {
            $guard = Auth::guard('owner')->user();
            $this->tb_user = new Owner();
        } elseif (Auth::guard('officer')->check()) {
            $guard = Auth::guard('officer')->user();
            $this->tb_user = new Officer();
        } else {
            $this->middleware('guest')->except('logout');
        }

        $delete = $this->tb_user->remove($id);
        if($delete){
            return redirect()->route('users')
            ->with('success', 'Akun Berhasil Dihapus');
        }
        
    }

    public function check(Request $request)
    {
        if (Auth::check()) {
            $guard = Auth::user();
            $this->tb_user = new User();
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
            $this->tb_user = new Admin();
        } elseif (Auth::guard('user')->check()) {
            $guard = Auth::guard('user')->user();
            $this->tb_user = new User();
        } elseif (Auth::guard('owner')->check()) {
            $guard = Auth::guard('owner')->user();
            $this->tb_user = new Owner();
        } elseif (Auth::guard('officer')->check()) {
            $guard = Auth::guard('officer')->user();
            $this->tb_user = new Officer();
        } else {
            $this->middleware('guest')->except('logout');
        }

        //echo 'CHECK';
        $request = $request->all();
        $check = $this->tb_user->check($request);
        return response()->json($check);
    }
}
