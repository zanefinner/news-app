<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App;
class Owner extends Controller
{
    public function add_admin(){
        return view('owner.add_admin');
    }
    public function admin_create(Request $re)
    {
        $admins = \DB::table('admins')->where([
            ['password', '=', $re->input('password')],
            ['email', '=', $re->input('email')],
        ])->get();

        $admins = json_decode($admins, true);

        if(isset($admins[0]['id'])){
            if($admins[0]['id']==1){
                return 'Welcome, owner!';
            }else{
                return view('owner.add_admin', ['error'=>'Only the owner can add admins']);
            }
        }else{
            return view('owner.add_admin', ['error'=>'Login invalid, please try again']);
        }
        
    }
}

