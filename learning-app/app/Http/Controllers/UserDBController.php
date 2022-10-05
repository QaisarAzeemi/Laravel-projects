<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserDBController extends Controller
{
    //
    function getUsers(){
        $usersdb = User::all(); //$usersdb = User::paginate(10); // to show 10 records per pages 
        return view('weather',['users'=>$usersdb]); // 
    }
}
