@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Send email</div>

            <div class="card-body">

                <form method="POST" action="/sendemail">
                    {{ csrf_field() }}    <!--Laravel token check is mandatory for every form in laravel -->

                   <!-- Title of group-email input -->
                  <div class="form-group{{ $errors->has('email_title') ? ' has-error' : '' }}">
                    Title of email
                    <input type="text" class="form-control" name="email_title" placeholder="Type title here...">
                    <small class="text-danger">{{ $errors->first('email_title') }}</small>
                  </div>

                  <!-- Body of email input -->
                  <div class="form-group{{ $errors->has('article_body') ? ' has-error' : '' }}">
                    <textarea class="form-control" name="article_body" placeholder="Type your article here..." rows="7" ></textarea>
                    <small class="text-danger">{{ $errors->first('article_body') }}</small>
                  </div>

                  <!-- Fullname input -->
                  <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
                    Name of account holder
                    <input type="text" class="form-control" name="fullname" placeholder="J.R. Smith">
                    <small class="text-danger">{{ $errors->first('fullname') }}</small>
                  </div>

                  <input class="btn btn-success pull-right" type="submit" name="submitSubscribe" value="Subscribe!">
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
