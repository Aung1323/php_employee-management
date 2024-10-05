@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h3>Adding New Admin</h3></div>
  <div class="card-body">
      
      <form action="{{ url('/admins') }}" method="post">
        {!! csrf_field() !!}
        <label>Admin's name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="phone" id="phone" class="form-control"></br>
        <label>Admin's father</label></br>
        <input type="text" name="father" id="father" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-primary">
        <a href="{{ url('/employees') }}" class="btn btn-secondary">Cancel</a></br>
    </form>
   
  </div>
</div>
 
@stop