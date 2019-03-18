<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Comment;

class CommentController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //return $request->all();
        $comment = new Comment;
        $comment->author = $request->author;
        $comment->content = $request->content;//request('content')
        $comment->post_id = $request->post_id;
        $comment->save();
        return redirect("posts/" . $request->post_id);
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
