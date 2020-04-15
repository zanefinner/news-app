<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function post_new(){
        return view('admin.post_new');
    }
}
