<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogentry;
class BlogController extends Controller
{
    //
    function showBlogs(){
        $showBlog = Blogentry::all();
        return view('blog', ['blogPosts'=>$showBlog]);
    }
}
