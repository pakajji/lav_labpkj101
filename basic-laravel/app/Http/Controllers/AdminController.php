<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index () {
        $name = "LnwzaPrayut008";
        return view('admin')
        ->with('name',$name);
    }
}
