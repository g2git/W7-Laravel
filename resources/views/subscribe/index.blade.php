@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Subscribe</div>

                <div class="card-body">

                    <form method="POST" action="/subscribe/index">
                        @csrf

                        <div class="form-group row">
                            <label for="chosen_plan" class="col-sm-4 col-form-label text-md-right">Chosen plan</label>
                              <div class="col-md-6">
                                <select id="chosen_plan" class="form-control{{ $errors->has('chosen_plan') ? ' is-invalid' : '' }}" name="chosen_plan" required>
                                  <option value="">None</option>
                                   <option value="&euro; 9.99 one time fee">&euro; 9.99 one time fee</option>
                                </select>
                                @if ($errors->has('chosen_plan'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('chosen_plan') }}</strong>
                                    </span>
                                @endif
                              </div>
                        </div>

                        <div class="form-group row">
                            <label for="IBAN" class="col-sm-4 col-form-label text-md-right">IBAN</label>

                            <div class="col-md-6">
                                <input id="iban" type="text" class="form-control{{ $errors->has('iban') ? ' is-invalid' : '' }}" name="iban" required autofocus>

                                @if ($errors->has('iban'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('iban') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Bankname" class="col-md-4 col-form-label text-md-right">Bank Name</label>

                            <div class="col-md-6">
                                <input id="bankname" type="text" class="form-control{{ $errors->has('bankname') ? ' is-invalid' : '' }}" name="bankname" required>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bankname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Fullname" class="col-md-4 col-form-label text-md-right">Full Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" required>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Subscribe
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
