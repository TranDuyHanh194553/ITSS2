<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        // echo 'HelloAdmin';
        return view ('admin_login');
    }

    public function show_dashboard(){
        return view ('admin_layout');
    }
}
