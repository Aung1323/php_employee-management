@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Trying To edit?</div>
  <div class="card-body">
      
      <form action="{{ url('admins/' .$admins->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$admins->id}}" id="id" />
        <label>Admin's name</label></br>
        <input type="text" name="name" id="name" value="{{$admins->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$admins->address}}" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$admins->phone}}" class="form-control"></br>
        <label>Admin's father</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$admins->father}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-primary"></br>
    </form>
   
  </div>
</div>
 
@stop