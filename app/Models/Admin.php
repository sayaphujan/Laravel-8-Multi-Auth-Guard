<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use DataTables;
use Auth;
use Session;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname',
        'name',
        'email',
        'password',
        'plain_password',
        'phone_number',
        //'postal_code',
        'level',
        'address',
        'photo'
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getAuthPassword()
    {
     return $this->password;
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function select_all(){
        $data = Admin::select('*')->get();
            return $data;
    }

    public function select_one($id){
        $data = Admin::find($id);
            return $data;
    }

    public function check($request){
        $data = Admin::where('name', '=' ,$request)->orWhere('email','=',$request)->orWhere('plain_password', '=', $request)->count();
        return $data;
    }

    public function store($request){

        $user = Auth::guard('admin')->user();

        //$request = $request->toArray();

        $request['level'] = (isset($request['level']) && !empty($request['level'])) ? $request['level'] : '3';

        $udata = array(
                    'remember_token'    => $request['_token'],
                    'fullname'         => $request['fullname'],
                    'name'         => $request['name'],
                    'email'        => (isset($request['email']) ? $request['email'] : ''),
                    'plain_password' => $request['password'],
                    'password'     => Hash::make($request['password']),
                    //'password'     => bcrypt($request['password']),
                    'phone_number' => (isset($request['phone']) ? $request['phone'] : ''),
                    'address'      => (isset($request['address']) ? $request['address'] : ''),
                    'level'        => $request['level'],
                    'photo' => (isset($request['photo']) ? $request['photo'] : '')
                    );

        //print_r($data);
        $user = Admin::create($udata);
        
        return $request;
        
    }

    public function modify($request, $id){
        //dd($request);
        $udata = array(
                    'remember_token'    => $request['_token'],
                    'fullname'          => $request['fullname'],
                    'name'              => $request['name'],
                    'email'             => $request['email'],
                    'phone_number' => $request['phone_number'],
                    'address'      => $request['address'],
                    'level'        => $request['level'],
                    'photo' => (isset($request['photo']) ? $request['photo'] : '')
                    );

        if(!empty($request['password'])) {

            $udata += array(
                            'plain_password'    => $request['password'],
                            'password' => Hash::make($request['password'])
                        );
        }
        
        if($request['photo'] != null) {

            $udata += array(
                            'photo'     => $request['photo']
                        );
        }
        
        //dd($udata);
        //print_r($udata);
        $user = Admin::where('id','=',$id)->update($udata);

        return $user;
    }

    public function remove($id){
        $data = Admin::find($id)->delete();
        return $data;
    }

    public function select_all_ajax($search){
        $data = Admin::select(array('admins.id','admins.fullname','admins.name','admins.email','admins.phone_number','admins.address','admins.level',DB::raw('(CASE WHEN admins.level = 1 THEN "ADMIN" WHEN admins.level = 2 THEN "OWNER" ELSE "USER" END) AS level')))->where('level','!=','4');  

        return $data;
    }
    
    public function select_all_admin(){
        $data = Admin::select('*')->where('level',1)->get();
            return $data;
    }
}
