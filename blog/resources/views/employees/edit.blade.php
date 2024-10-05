@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Trying To edit?</div>
  <div class="card-body">
      
      <form action="{{ url('employees/' .$employees->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$employees->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$employees->address}}" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$employees->phone}}" class="form-control"></br>
        <label>Father</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$employees->father}}" class="form-control"></br>
        <label>Department Name</label></br>
        <select name="department_name" id="department_name" class="form-control">
          @foreach($departments as $id => $department_name)
          <option value="{{ $department_name }}">{{ $department_name }}</option>
          @endforeach
        </select>
        <br>
        <input type="submit" value="Update" class="btn btn-primary">
        <a href="{{ url('/employees') }}" class="btn btn-secondary">Cancel</a></br>
    </form>
   
  </div>
</div>
 
@stop