@extends('layouts.app')

@section('content')

<div id="blog" class="row">
  <div class="form-group col-md-2">
    <form method = "POST" action="/titles">
      {{csrf_field()}}
      <select class="form-control" name="filterbyCategory" required>
        <option value="" selected disabled>Choose a category</option>
        @foreach($items as $item)
         <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
      </select>
      <button type = "submit" name = "filterCategory">Filter</button>
    </form>
    <!-- <div class="form-group"> -->
     <form method = "POST" action="/titles">
       {{csrf_field()}}
       <input type="text" name="filterbyAuthor" placeholder="Choose an author">
       <button type = "submit" name = "filterAuthor">Filter</button>
      </form>
   <!-- </div> -->

  </div>
  <div class="col-md-10 blogShort" style="float:right">
    @foreach ($titles as $title)

                    <h1><a href="/titles/{{$title->id}}">{{$title -> user_id}}: {{$title -> article_title}}</a></h1>
                    <img src="http://www.kaczmarek-photo.com/wp-content/uploads/2012/06/guinnes-150x150.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">

                    <a class="btn btn-blog pull-right marginBottom10" href="/titles/{{$title->id}}">READ MORE</a>

      @endforeach
      </div>
      <div class="col-md-12 gap10">
         <a href="/">Go back</a>
      </div>
      </div>
@endsection
