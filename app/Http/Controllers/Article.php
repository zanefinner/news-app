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
    public function present($id){

        //use $id to retrieve data
        #DUMMY DATA
        $data = [
            'title'=>'How to Write Well',
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'author' => 'Zane Finner',
            'posted_at' => '12:00 GMT Time',
            'thumbnail'=>'images/test.jpg'
        ];
        return view('article', ['data'=>$data]);
    }
}
