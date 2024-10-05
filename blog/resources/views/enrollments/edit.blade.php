@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Trying To edit?</div>
  <div class="card-body">
      
      <form action="{{ url('enrollments/' .$enrollments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$enrollments->id}}" id="id" />
        <label>Enroll NO</label></br>
        <input type="text" name="name" id="name" value="{{$enrollments->enroll_no}}" class="form-control"></br>
        <label>Department ID</label></br>
        <input type="text" name="department_id" id="department_id" value="{{$enrollments->department_id}}" class="form-control"></br>
        <label>Employee ID</label></br>
        <input type="text" name="employee_id" id="empployye_id" value="{{$enrollments->employee_id}}" class="form-control"></br>
        <label>Join Date</label></br>
        <input type="text" name="join_date" id="join_date" value="{{$enrollments->join_date}}" class="form-control"></br>
        <label>Salary</label></br>
        <input type="text" name="salary" id="salary" value="{{$enrollments->salary}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-primary"></br>
    </form>
   
  </div>
</div>
 
@stop