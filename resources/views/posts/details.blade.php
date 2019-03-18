@extends('layouts.guest_layout')


@section('content')
      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{$post->title}}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Start Bootstrap</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on {{$post->created_at}}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead">

          {{$post->content}}

        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form method="POST" action="{{url('comments')}}">
              <input name="post_id" type="hidden" value="{{$post->id}}"/>
              {{csrf_field()}}
              <div class="form-group">
                <input placeholder="Name" class="form-control" name="author"/>
              </div>
              <div class="form-group">
                <textarea placeholder="Comment" name="content" class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>


        @foreach($post->comments as $comment)
        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">{{$comment->author}}</h5>
            {{$comment->content}}
          </div>
        </div>
        @endforeach

 

      </div>

      @endsection
