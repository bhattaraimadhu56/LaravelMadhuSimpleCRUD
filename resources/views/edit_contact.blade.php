@extends('index')
@section('content')
<div class="col-md-12" align="center">
	<form name="form1" method="post" action="{{url('updateContact/'.$single_view->id)}}" >
     @csrf
	<div>
	<label> Name:</label>
	<label><input type="text" name="name1Form" value="{{$single_view->name}}"  required=""></label>
	</div>
	<div>
	<label> Email:</label>
	<label><input type="email" name="email1Form" value="{{$single_view->email}}" required=""></label>
	</div>
	<div>
	<label> Phone:</label>
	<label><input type="integer" name="phone1Form"value="{{$single_view->phone}}" required=""></label>
	</div>
	<div>
	<input type="submit"  class="btn btn-success align-middle" name="submitBtn" value="Update Contact">
	
	</form>
</div>	 
@endsection
