<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use \App\Comment;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('posts.index',compact('posts'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($post)
    {
        // $post = Post::where("post",$post)->get()[0];
        $post = Post::find($post);
        // $comments = Comment::where("post_id",$post->id)->get();
        //return $post;
        // $post->comment;

        return view('posts.details',compact('post'));
    }


    public function edit($post)
    {

    }

    public function update(Request $request, $post)
    {
        //
    }

    public function destroy($post)
    {

    }
}
