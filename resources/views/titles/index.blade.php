<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      @foreach ($titles as $title)
        <li>
          <a href="/titles/{{$title->id}}">{{$title -> user_id}}: {{$title -> article_title}}</a>
        </li>
      @endforeach
  </ul>
  </body>
</html>
