<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class PostAdminController extends Controller
{

    public function index()
    {
        $posts = Post::all();
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

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
