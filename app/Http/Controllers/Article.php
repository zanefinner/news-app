<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Articles;
class Article extends Controller
{
    public function create(Request $req){
        $validatedData = $req->validate([
            'title' => 'required|unique:title|max:255',
            'content' => 'required|min:255',

        ]);

        if (Auth::attempt($validatedData)) {

            // validation successful!
            // redirect them to the secure section or whatever
            // return Redirect::to('secure');
            // for now we'll just echo success (even though echoing in a controller is bad)
            echo 'SUCCESS!';
    
        } else {        
    
            // validation not successful, send back to form 
            return Redirect::to('login');
    
        }
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
            return view('error', ['err'=>'Article Does Not Exist']);
        }
    }
}
