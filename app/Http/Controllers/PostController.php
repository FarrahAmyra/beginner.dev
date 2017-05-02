<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Post;
use App\Http\Requests;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = DB::table('posts')->get();
        $posts = Post::all();
        //dd($posts);

        return view('allposts',compact('posts'));

    }

  
    public function create(Request $request)
    {
         //$posts = Post::pluck('title', 'id');
        return view('newpost');
    }

    public function insert(Request $request)
    {
        
    }
   
    public function store(Request $request)
    {
        $post = $request ->all();
        Post::create($post);
        flash('Your new post is successfully inserted into database', 'success');

        return redirect('allposts');
        // $post = $request -> input('content');
        // return view('allposts',array('newpost'=> $post,));
    }

   
    public function show($id)
    {
        $post = Post::find($id);
        return view('allpostdetails', compact('post'));
    }

   
    public function edit($id)
    {
        $post = Post::find($id);
        return view('update',compact('post'));
    }

   
    public function update(Request $request,$id)
    {
        $post = Post::find($id);

        // $post->title= $request->title;
        // $post->content = $request->content;
        $post->update($request->all());

        // $post->save();
        flash('Your post has been updated', 'success');
        return redirect('/allposts');
    }

  
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        flash('Post has been deleted successfully', 'danger');

        return redirect('allposts');
    }
}
