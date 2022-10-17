<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyAppController extends Controller
{
    //
    function getApp(){
        return view('app');
    }
}
