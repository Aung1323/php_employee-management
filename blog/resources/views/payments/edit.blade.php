@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Trying To edit?</div>
  <div class="card-body">
      
      <form action="{{ url('payments/' .$payments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$payments->id}}" id="id" />
        <label>Enroll No</label></br>
        <select name="enroll_no" id="enroll_no" class="form-control">
          @foreach($payments as $id => $enroll_no)
          <option value="{{ $id }}">{{ $enroll_no }}</option>
          @endforeach
        </select>
      </br>
        <label>Paid Date</label></br>
        <input type="text" name="paid_date" id="paid_date" value="{{$payments->paid_date}}" class="form-control"></br>
        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" value="{{$payments->amount}}" class="form-control"></br>
        <label>For Month</label></br>
        <input type="month" name="for_month" id="for_month" value="{{$payments->for_month}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-primary">
        <a href="{{ url('/payments') }}" class="btn btn-secondary">Cancel</a></br>
    </form>
   
  </div>
</div>
 
@stop