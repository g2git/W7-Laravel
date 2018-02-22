@extends ('layout')

@section('content')

<div id="blog" class="row">
    @foreach ($titles as $title)
                <div class="col-md-10 blogShort">
                    <h1>{{$title -> article_title}}</h1>
                    <img src="http://www.kaczmarek-photo.com/wp-content/uploads/2012/06/guinnes-150x150.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">

                    <article><p>
                        {{$title -> article}}
                        </p></article>
                    <a class="btn btn-blog pull-right marginBottom10" href="/titles/{{$title->id}}">READ MORE</a>
                </div>

      @endforeach
      <div class="col-md-12 gap10"></div>
      </div>
@endsection
