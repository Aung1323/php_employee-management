@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Employee Facts</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Enroll No : {{ $enrollments->enroll_no }}</h5>
        <p class="card-text">Department : {{ $enrollments->department->name }}</p>
        <p class="card-text">Employee : {{ $enrollments->employee->name }}</p>
        <p class="card-text">Join Date : {{ $enrollments->join_date }}</p>
        <p class="card-text">Salary : {{ $enrollments->salary }}</p>
        <a href="{{ url('/enrollments') }}" class="btn btn-secondary">Back</a></br>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection