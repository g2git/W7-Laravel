@extends('layouts.app')

@section('content')
<a href="/titles">Go back</a>
          <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

              <!-- Title -->
              <h1 class="mt-4">{{$show_article -> article_title}}</h1>

              <!-- Author -->
              <p class="lead">
                by
                <a href="#">{{$show_article -> user_id}}</a>
              </p>

              <hr>

              <!-- Date/Time & Category -->
              <p>Posted on {{$show_article -> created_at}}, Category : {{$show_article -> category_id}}</p>

              <hr>

              <!-- Preview Image -->
              <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

              <hr>

              <!-- Post Content/Body -->
              <p class="lead">{{$show_article -> article}}</p>


              <hr>

              <!-- Comments Form -->
              <div class="card my-4">
                <h5 class="card-header">Leave a Comment:</h5>
                <div class="card-body">
                  <form method="post" action="/comment">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <input type="hidden" name="article_id" value="{{$show_article -> id}}">
                      <input type="checkbox" name="anonymous">Anonymous Post
                      <textarea name="comment" class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" name="submitComment" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
              @foreach($comments as $comment)
              <div class="media mb-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">{{$comment -> user_id}}</h5>
                     {{$comment -> comment}}
                  </div>
                </div>
                @endforeach
                </div>
              </div>

@endsection
