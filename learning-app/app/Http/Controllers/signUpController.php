<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joining;
class signUpController extends Controller
{
    //
    function sUp(Request $request){
        $join = new joining;
        $join->name = $request->name;
        $join->id = $request->id;
        $join->password = $request->password;
        $join->email = $request->email;
        $join->location = $request->location;
        $join->save();
        return redirect('signup');
    }
    
}
