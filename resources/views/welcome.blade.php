@extends('layouts.app')

@section('content')
@if(session()->has('messageSubscribe'))
    <div class="alert alert-success">
        {{ session()->get('messageSubscribe') }}
    </div>
@endif
Welkom     <br>
 <ul>
<li><a href="write">Write article</a></li>
<li><a href="titles">Read articles</a></li>
<li><a href="subscribe/">Subscribe</a></li>
</ul>
@endsection
