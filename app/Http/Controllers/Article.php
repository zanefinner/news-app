<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Article extends Controller
{
    public function create(){
        //verify and upload or warn
    }
    public function search(Request $req){
        return "You searched for ".$req->q;
        //search db for articles
    }
}
