@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Employee Facts</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $payments->enrollment->enroll_no }}</h5>
        <p class="card-text">Paid Date : {{ $payments->paid_date }}</p>
        <p class="card-text">Amount : {{ $payments->amount }}</p>
        <p class="card-text">For Month : {{ $payments->for_month }}</p>
        <a href="{{ url('/payments') }}" class="btn btn-secondary">Back</a></br>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection