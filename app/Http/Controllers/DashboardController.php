<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $name="batch 101";
        return view('dashboard',compact('name'));
    }

    public function test()
    {
        return view('test');
    }

}
