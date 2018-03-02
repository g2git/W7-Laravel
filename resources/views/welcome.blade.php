@extends('layouts.app')

@section('content')
@if(session()->has('messageSubscribe'))
    <div class="alert alert-success">
        {{ session()->get('messageSubscribe') }}
    </div>
@endif
{{ __('messages.welcome') }}     <br>
 <ul>
<li><a href="write">{{ __('messages.write_article') }}</a></li>
<li><a href="titles">{{ __('messages.read_articles') }}</a></li>
<li><a href="subscribe/">{{ __('messages.subscribe') }}</a></li>
</ul>
@endsection
