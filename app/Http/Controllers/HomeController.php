<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard'); // return view to dashboard
                                        // admin itu adalah sebuah folder didalam folder view
                                        // dashboard itu adalah sebuah file didalam folder admin
        
    }
}
