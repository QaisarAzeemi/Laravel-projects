<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    //
    function uploadPic(Request $request){
       // echo "Hello from Controller";
       return $request->file('pic')->store('pics');
    }
}
