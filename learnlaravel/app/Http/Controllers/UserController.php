<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
       // $user = DB::table('users')->where('name')->first();
    	       // $users = DB::table('users')->get();
    	//$titles = DB::table('users')->pluck('email');
    	//return view('profile');
    	$query = DB::table('users')->select('name');
    	


foreach ($query as $name) {
   echo $query;
	}
	}
}