<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class RoleController extends Controller
{
    //
    public function index()
    {
        if (Auth::user()->role == 'admin'){
            return view('admin.home');
          }
        else{
            return view('home');
          }
    }
}
