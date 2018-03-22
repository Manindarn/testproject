<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
{
$records = DB::table('users')->get();
return view('profile')->with('users',$records); 
}
}
