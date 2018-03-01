@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Method Payment</div>

                <div class="card-body">

                    <form method="POST" action="/subscribe/index">
                        {{ csrf_field() }}    <!--Laravel token check is mandatory for every form in laravel -->

                       <!-- IBAN input -->
                      <div class="form-group">
                        IBAN
                        <input type="radio" name="paymentCheck" value="iban">
                      </div>

                      <!-- CreditCard input -->
                      <div class="form-group">
                         CreditCard
                         <input type="radio" name="paymentCheck" value="creditcard">
                      </div>

                      <input class="btn btn-success pull-right" type="submit" name="submitSubscribe" value="Subscribe!">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
