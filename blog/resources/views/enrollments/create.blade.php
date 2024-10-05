@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h3>Adding New Enrollment</h3></div>
  <div class="card-body">
      
      <form action="{{ url('/enrollments') }}" method="post">
        {!! csrf_field() !!}
        <label>enroll_no</label></br>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control"></br>
        <label>Department ID</label></br>
        <input type="text" name="department_id" id="department_id" class="form-control"></br>
        <label>Employee ID</label></br>
        <input type="text" name="employee_id" id="employee_id" class="form-control"></br>
        <label>Join Date</label></br>
        <input type="text" name="join_date" id="join_date" class="form-control"></br>
        <label>Salary</label></br>
        <input type="text" name="salary" id="salary" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-primary">
        <a href="{{ url('/enrollments') }}" class="btn btn-secondary">Cancel</a></br>
    </form>
   
  </div>
</div>
 
@stop