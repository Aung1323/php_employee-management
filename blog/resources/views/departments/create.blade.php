@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h3>Adding New Department</h3></div>
  <div class="card-body">
      
      <form action="{{ url('/departments') }}" method="post">
        {!! csrf_field() !!}
        <label>Department's Name</label></br>
        <input type="text" name="name" id="name" class="form-control">
        </br>
        <label>Start Date</label></br>
        <input type="text" name="start_date" id="start_date" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-primary">
        <a href="{{ url('/departments') }}" class="btn btn-secondary">Cancel</a></br>
    </form>
   
  </div>
</div>
 
@stop