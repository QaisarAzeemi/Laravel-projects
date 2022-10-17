<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joining;
class JoiningController extends Controller
{
    //
    function userData(){
        $data = Joining::all();
        return view('joinedusers',['joinedUsersData'=> $data]);
    }
}
