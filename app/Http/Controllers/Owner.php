<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Owner extends Controller
{
    public function add_admin(){
        return view('owner.add_admin');
    }
}
