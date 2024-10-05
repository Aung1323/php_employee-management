@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Department Details</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $departments->name }}</h5>
        <p class="card-text">Start Date : {{ $departments->start_date }}</p>
        <a href="{{ url('/departments') }}" class="btn btn-secondary">Back</a></br>
  </div>
    </hr>
  
  </div>
</div>
@endsection