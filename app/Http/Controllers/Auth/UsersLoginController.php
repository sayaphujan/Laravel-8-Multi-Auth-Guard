<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\Users;
use Auth;


class UsersLoginController extends Controller
{
    use AuthenticatesUsers;

    protected function guard()
    {
        return Auth::guard('web');
    }

    protected function redirectTo()
    {
        // Redirect to the appropriate page after login
        $request->session()->put('level',auth()->user()->level);
        return redirect()->route('home');
    }

    public function showLoginForm()
    {
        return view('main.users-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('web')->attempt($credentials)) {
            // Authentication passed
            $request->session()->put('level',auth()->user()->level);
            return redirect()->route('home');
        }

        // Authentication failed
        return redirect('/users/login/')->withError(__('Maaf, Anda tidak terdaftar.'));
        //return redirect()->back()->withErrors([
        //    'email' => 'Invalid credentials (User).',
        //]);
    }
}
