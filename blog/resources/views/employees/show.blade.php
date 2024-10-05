@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Employee Detail</div>
  <div class="card-body bg-light">
        <div class="card-body">
        <h3 class="card-title">Name : {{ $employees->name }}</h3>
        <p class="card-text">Address : {{ $employees->address }}</p>
        <p class="card-text">Phone : {{ $employees->phone }}</p>
        <p class="card-text">Father : {{ $employees->father }}</p>
        <p class="card-text">Department : {{ $employees->department_name }}</p>
        <a href="{{ url('/employees') }}" class="btn btn-secondary">Back</a></br>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection