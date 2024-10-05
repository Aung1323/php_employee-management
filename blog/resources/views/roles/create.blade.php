@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h3>Adding New Interns</h3></div>
  <div class="card-body">
      
      <form action="{{ url('/roles') }}" method="post">
        {!! csrf_field() !!}
        <label>Intern's name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Intern's email</label></br>
        <input type="email" name="email" id="email" class="form-control"></br>
        <label>Department Name</label></br>
        <select name="department_name" id="department_name" class="form-control">
          @foreach($departments as $id => $department_name)
          <option value="{{ $department_name }}">{{ $department_name }}</option>
          @endforeach
        </select>
        <br>
        <input type="submit" value="Save" class="btn btn-primary">
        <a href="{{ url('/roles') }}" class="btn btn-secondary">Cancel</a></br>
    </form>
  </div>
</div>
 
@stop