<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function termsofuse(){
    	return view('terms');
    } 

    public function getcontact(){
    	return view('contact');
    }

}
