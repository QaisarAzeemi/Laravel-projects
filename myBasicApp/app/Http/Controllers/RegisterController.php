<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joining;
class RegisterController extends Controller
{
    //
    function register(Request $request){
        $join = new joining;
        $join->name = $request->name;
        $join->password = $request->password;
        $join->email = $request->email;
        $join->location = $request->location;
        $join->save();
        return redirect('register');
    }
}
