<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joining;

class userController extends Controller
{
    //
    function saveUser(Request $request){
        //echo 'User logins submitted';
        $request->validate([
            'name' => 'required | min : 10',
            'pasword' => 'required | min : 8'
        ]);
        // return $request->input();
            $LIData = $request->input();
        $request->session()->put('name', $LIData['name']); // put('key',variable['key'])
        return redirect('profile');
       //echo session('name'); // session('key');
    }

    function fetchUser(){
        $data = Joining::all();
        return view('userList',['users'=>$data]);
    }

    function deleteUser($Id){
        $data = Joining::find($Id);
        $data->delete();
        return redirect('list');
    }

    // function editUser($Id){
    //     $Data = Joining::
    // }
}
