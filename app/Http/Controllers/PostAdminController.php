<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class PostAdminController extends Controller
{

    public function index()
    {
        // $posts = Post::all();
        $posts = Post::orderBy('id','desc')->get();
        // return $posts;
        return view('admin.posts.index',["posts"=>$posts]);

    }


    public function create()
    {
        return view('admin.posts.create');
    }


    public function store(Request $request)
    {
        // return $request->title;
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect(url('/admin/posts'));
    }

    public function show($post)
    {
        //
    }


    public function edit($post)
    {
        $post = Post::find($post);
        return view('admin.posts.edit', compact('post'));
    }


    public function update(Request $request,Post $post)
    {

        // $post = Post::find($post);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect(url('/admin/posts'));
    }

    public function destroy(Post $post)
    {
        //$post = Post::find($post);
        $post->delete();
        // $post->save();
        return redirect(url('/admin/posts'));
    }
}
