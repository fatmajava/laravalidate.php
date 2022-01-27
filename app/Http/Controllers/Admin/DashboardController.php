<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\controller;

class DashboardController extends Controller
{
    //
    public function index(){
        return view("admin.dashboard");
    }
}
