@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">admin Facts</div>
  <div class="card-body">
        <div class="card-body">
        <h3 class="card-title">Name : {{ $admins->name }}</h3>
        <p class="card-text">Address : {{ $admins->address }}</p>
        <p class="card-text">Phone : {{ $admins->phone }}</p>
        <p class="card-text">Father : {{ $admins->father }}</p>
        <a href="{{ url('/admins') }}" class="btn btn-secondary">Back</a>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection