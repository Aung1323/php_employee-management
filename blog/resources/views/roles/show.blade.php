@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Intern Details</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $roles->name }}</h5>
        <h5 class="card-title">Email : {{ $roles->email }}</h5>
        <h5 class="card-title">Department : {{ $roles->department_name }}</h5>
        <a href="{{ url('/roles') }}" class="btn btn-secondary">Back</a></br>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection