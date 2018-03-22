<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User\User;


class UprofileController extends Controller
{
      public function index()
    {
        $users = DB::table('users')->get();

        return view('user.index', ['users' => $users]);
    }
}

