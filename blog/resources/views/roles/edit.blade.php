@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Trying To edit?</div>
  <div class="card-body">
      
      <form action="{{ url('roles/' .$roles->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$roles->id}}" id="id" />
        <label>Intern's name</label></br>
        <input type="text" name="name" id="name" value="{{$roles->name}}" class="form-control"></br>
        <label>Intern's email</label></br>
        <input type="email" name="email" id="email" value="{{$roles->email}}" class="form-control"></br>
        <label>Department Name</label></br>
        <select name="department_name" id="department_name" class="form-control">
          @foreach($departments as $id => $department_name)
          <option value="{{ $department_name }}">{{ $department_name }}</option>
          @endforeach
        </select>
        <br>
        <input type="submit" value="Update" class="btn btn-primary">
        <a href="{{ url('/roles') }}" class="btn btn-secondary">Cancel</a></br>
  </div>
</div>
 
@stop