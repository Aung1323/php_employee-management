@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h3>Adding New Employee</h3></div>
  <div class="card-body">
      
      <form action="{{ url('/employees') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="phone" id="phone" class="form-control"></br>
        <label>Father</label></br>
        <input type="text" name="father" id="father" class="form-control"></br>
        <label>Department Name</label></br>
        <select name="department_name" id="department_name" class="form-control">
          @foreach($departments as $id => $department_name)
          <option value="{{ $department_name }}">{{ $department_name }}</option>
          @endforeach
        </select>
        <br>
        <input type="submit" value="Save" class="btn btn-primary">
        <a href="{{ url('/employees') }}" class="btn btn-secondary">Cancel</a></br>
    </form>
   
  </div>
</div>
 
@stop