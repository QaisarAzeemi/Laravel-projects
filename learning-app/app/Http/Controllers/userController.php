<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joining;
use App\Models\blogentrie;

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

    function fetchBlog(){
        $blog = blogentrie::all();
        return view('Blogs',['blogs'=>$blog]); //return view('page.blade.php',['key'=>variable])
    }

    // function fetchSingleBlog($Id){
      
    //    $record = blogentrie::find($Id);//where('id',$Id)->first();
    //    return $record;
    // //    return view('Blogs',['blogs'=>$blog]); //return view('page.blade.php',['key'=>variable])
    // }

    function deleteUser(post $Id){
        $data = Joining::find($Id);
        $data->delete();
        return redirect('list');
    }

    // function editUser($Id){
    //     $Data = Joining::
    // }
//     public function index()
//     {
//         $data = Joining::first()->get();
      
//         return view('userList',compact('data'))
//                 ->with('i', (request()->input('page', 1) - 1) * 5);
//     }
}
