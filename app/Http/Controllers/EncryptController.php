<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncryptController extends Controller
{
    public function index(Request $request){

        $data= Post::orderBy('id','desc')->get();
        $postcount = count($post);
        return view('frontend.home',compact('post'));
	 
       }
}
