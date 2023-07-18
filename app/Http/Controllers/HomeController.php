<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Customer;
use App\Models\Price;
use App\Models\Bank;
use App\Models\Trans;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('guest')->except('logout');
        $this->tb_customer = new Customer();
        $this->tb_price = new Price();
        $this->tb_bank = new Bank();
        $this->tb_trans = new Trans();      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        if (Auth::check()) {
            $guard = Auth::user();
            $path = 'user';
        } elseif (Auth::guard('admin')->check()) {
            $guard = Auth::guard('admin')->user();
            $path = 'admin';
        } elseif (Auth::guard('customer')->check()) {
            $guard = Auth::guard('customer')->user();
            $path = 'customer';
        } elseif (Auth::guard('driver')->check()) {
            $guard = Auth::guard('driver')->user();
            $path = 'driver';
        } else {
            // User is not authenticated
            // Perform actions for unauthenticated user
            $this->middleware('guest')->except('logout');
        }

        
        $total_transaksi = $this->tb_trans->total_transaksi();
        $total_pembeli = $this->tb_trans->total_pembeli();
        $total_air_distribusi = $this->tb_trans->total_air_distribusi();
        $total_air_terjual = $this->tb_trans->total_air_terjual();
        $total_transaksi_today = $this->tb_trans->total_transaksi_today();
        $total_unpaid_today = $this->tb_trans->total_unpaid_today();
        $total_paid_today = $this->tb_trans->total_paid_today();
        $total_unsent_today = $this->tb_trans->total_unsent_today();
        $total_sent_today = $this->tb_trans->total_sent_today();
        
        $percent_unpaid = ($total_transaksi_today == 0) ? 0 : ($total_unpaid_today/$total_transaksi_today)*100;
        $percent_paid   =  ($total_transaksi_today == 0) ? 0 : ($total_paid_today/$total_transaksi_today)*100;
        $percent_unsent =  ($total_transaksi_today == 0) ? 0 : ($total_unsent_today/$total_transaksi_today)*100;
        $percent_sent =  ($total_transaksi_today == 0) ? 0 : ($total_sent_today/$total_transaksi_today)*100;
        
        return view('home', compact('guard','path','total_transaksi','total_pembeli','total_air_distribusi','total_air_terjual','total_transaksi_today','total_unpaid_today','total_paid_today','percent_unpaid','percent_paid','total_unsent_today','total_sent_today','percent_unsent','percent_sent'));
    }
    
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('home');
    }
    
    public function userHome()
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

        $price = $this->tb_price->select_all();
        $bank = $this->tb_bank->select_all();
        return view('trans.order', compact('guard','price','bank'));
    }
}
