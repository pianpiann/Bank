<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    //
    public function toutou(){

        $posts= ['VERSEMENT','RETRAIT','VIREMENT'];
        return view('operation',compact('posts'));

    }

    public function client(){
        
            return view('client');
    }

    public function retrait(){
  
        return view('retrait');

    }

    public function employe(){
  
        return view('employe');

    }



}
