<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_dashboard()
    {
        return view('admin.admin_dashboard');
    }

    public function admin_homepage()
    {
        return view('admin.admin_homepage');
    }

    public function admin_user_monitoring()
    {
        return view('admin.admin_user_monitoring');
    }

    public function admin_barterplace()
    {
        return view('admin.admin_barterplace');
    }
}   
