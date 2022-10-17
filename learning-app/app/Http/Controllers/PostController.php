<?php
//Learning Source:
//https://www.nicesnippets.com/blog/laravel-9-crud-operation-example-tutorial
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //with() is a Laravel function and compact() is a PHP function and have totally different purposes.
        //with() allows you to pass variables to a view and compact() creates an array from existing variables
        // given as string arguments to it.The with() cannot be used outside laravel but the compact() 
        //can be used anywhere in the PHP script.
        $post = Post::latest()->get();
        return view('post.index',compact('post'))->with('i',(request()->input('page',1)-1)*5);
        // view (nested directory.blade file)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     'title' => 'required',
        //     'body' => 'required',
        //     'user_id' => auth()->id()
        // ]);

        Post::create($request->all());
        return redirect()->route('posts.index')->with('success','post created successfully');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //Once you have created a view, 
        //you may return it from one of your application's routes or controllers using the global view helper:
        return view('post.show',compact('post')); // here we re returning show.blade.php
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        // $request->validate([
        //     'title' => 'required',
        //     'body' => 'required',
        //     'user_id' => auth()->id(),
        // ]);
        //update the model using an array with multiple values which don't need to use the save() method.
        $post->update($request->all());
      
        return redirect()->route('posts.index')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //To delete a single user row, fired an ajax request using DELETE request type
        $post->delete();
        return redirect()->route('post.index')->with('success','Post deleted successfully');
    }
}
