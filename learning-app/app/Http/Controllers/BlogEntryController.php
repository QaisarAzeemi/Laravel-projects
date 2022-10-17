<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogentrie;
class BlogEntryController extends Controller
{
    //
    function blogEntry(Request $request){
        $bE = new blogentrie;
        $bE->title = $request->title;
        $bE->subject = $request->subject;
        $bE->description = $request->description;
        $bE->save();
        return redirect('blogs');
    }
}
