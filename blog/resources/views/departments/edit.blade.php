@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Trying To edit?</div>
  <div class="card-body">
      
      <form action="{{ url('departments/' .$departments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$departments->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$departments->name}}" class="form-control"></br>
        <label>Start Date</label></br>
        <input type="text" name="start_date" id="start_date" value="{{$departments->start_date}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-primary">
        <a href="{{ url('/departments') }}" class="btn btn-secondary">Cancel</a></br>
    </form>
   
  </div>
</div>
 
@stop