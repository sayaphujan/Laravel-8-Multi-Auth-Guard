<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DataTables;
use Carbon\Carbon as CarbonDate;
use App\Models\User;
use App\Models\Price;
use App\Models\Trans;
use App\Models\Bank;
use Auth;

class PortalController extends Controller
{
    use AuthenticatesUsers;

    protected $guard;
    protected $tb_user;
    protected $tb_price;
    protected $tb_trans;
    protected $tb_bank;

    public function __construct()
    {
        //$this->middleware('auth');
        $this->tb_user = new User();
        $this->tb_price = new Price(); 
        $this->tb_trans = new Trans(); 
        $this->tb_bank = new Bank(); 
    }

    public function index()
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
        }else{
            $this->middleware('guest')->except('logout');
        }

        $price = $this->tb_price->select_all();
        $bank = $this->tb_bank->select_all();
        
        return view('portal.index', compact('price','bank','guard'));
    }

    public function getprice($id)
    {
        $price = $this->tb_price->getprice($id);

        return $price;
    }

    public function isvalid(Request $request)
    {
        $rules = [
            'phone' => 'required|numeric',
        ];

        $messages = [
            'phone.numeric' => 'Nomor telepon harus berisi angka',
        ];

        $data = $request->toArray();

        $validator = Validator::make($data, $rules, $messages);

        return $validator;
    
    }


    public function pesan(Request $request)
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
        }else{
            $this->middleware('guest')->except('logout');
        }

        $validator = $this->isvalid($request);

        $data = $request->toArray();

        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator->messages());
            //return redirect()->route('/')->with('error', $validator->messages());
        }
        else
        {
        
            $data['photo'] = null;

            if($request->file('photo')){
                $file= $request->file('photo');
                $filename= date('YmdHi').$file->getClientOriginalName();
                //$filename = $request->order_id;
                $file-> move(public_path('/upload/lokasi'), $filename);
                $data['photo']= $filename;
            }
            
            $name = ($data['flag'] == '1') ? $data['name'] : $data['phone'];

            $data_cust = array(
                    '_token'        => $data['_token'],
                    'fullname'      => $data['name'],
                    'name'          => $name,
                    'email'         => $data['name'].'@mail.com',
                    'password'     => Hash::make($data['order_id']),
                    'plain_password'     => $data['order_id'],
                    'phone_number'        => $data['phone'],
                    'address'      => $data['address'],
                    'level'        => '3',
                        );

            $cust = $this->tb_trans->check($data_cust);

            //LOC
            $loc = array(
                'loc_address1'  => $data['address'],
                'loc_address2'  => $data['detail'],
                'loc_lat'       => $data['address_latitude'],
                'loc_lng'       => $data['address_longitude'],
                'loc_img'       => $data['photo'],
            );
            
            $loc = $this->tb_trans->store_loc($loc);
            
            //TRANS
            //$pay_status = ($data['payment'] == 'Tunai') ? '1' : '0';
            $data_trans = array(
                'price_net'     => $data['net_price'],
                'price_deliv'   => $data['deliv_price'],
                'price_volume'  => $data['volume'],
                'price_sum'     => $data['total'],
                'trans_category'    => $data['category'],
                'trans_destination' => $data['destination'],
                'trans_note'        => $data['noted'],
                'trans_phone'       => $data['phone'],
                'order_id'          => $data['order_id'],
                'payment'           => $data['payment'],
                'payment_status'    => '0',
                'user_id'           => $cust,
                'price_id'          => $data['price_id'],
                'loc_id'            => $loc,
                'driver_id'         => '0'
            );

            $trans = $this->tb_trans->store_trans($data_trans);

        }

        if($trans)
        {
            $check = User::where('name','=',$name)->get()->toArray();
            $checkdata = $check[0];
            if(Auth::guard('user')->attempt(array('name' => $checkdata['name'], 'password' => $checkdata['plain_password'])))
            {
                if ($guard->level > 0) {
                   $request->session()->put('level',$guard->level);
                    return redirect()->route('trans.detail', $trans['order_id']);
                }
            }
        }
   }

   public function pay(Request $request)
   {
        $data= $request->toArray();
        //dd($data);
        $data['photo'] = null;

            if($request->file('photo')){
                $file= $request->file('photo');
                $filename= date('YmdHi').$file->getClientOriginalName();
                //$filename = $request->order_id;
                $file-> move(public_path('/upload/bukti'), $filename);
                $data['photo']= $filename;
            }
        $trans = $this->tb_trans->update_payment($data['photo'], $data['id']);

        return redirect('/')
            ->withSuccess('Terimakasih.');
   }
}