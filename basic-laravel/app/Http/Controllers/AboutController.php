<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index () {
        $address = "กรุงเทพ , ประเทศไทย";
        $tel = "xxx-xxx-xxxx";
        //return view('about',['address' => $address, 'tel' => $tel]);
        //return view('about',compact(['address','tel']));
        return view('about')
        ->with('address',$address)
        ->with('tel',$tel)
        ->with('error','404 Not Found');
    }
}
