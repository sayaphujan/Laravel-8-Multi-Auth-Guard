<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\Drivers;
use Auth;


class DriversLoginController extends Controller
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
}
