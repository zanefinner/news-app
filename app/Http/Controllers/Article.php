<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class Article extends Controller
{
    public function create(){
        //verify and upload or warn
    }
    public function search(Request $req){
        return "You searched for ".$req->q;
        //search db for articles
    }
    public function present($id){

        $data = DB::table('articles')->find($id);
        if(isset($data))
        {//Article Exists!
            return view('article', ['data'=>$data]);
        }else
        {//Article does not exist!
            return 'article does not exist';
        }
    }
}
