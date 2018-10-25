@extends('index')
@section('content')
<div class="col-md-12" align="center">
	<form name="form1" method="post" action="{{url('insertContact')}}" >
     @csrf
	<div>
	<label> Name:</label>
	<label><input type="text" name="name1Form" placeholder="Madhu" required=""></label>
	</div>
	<div>
	<label> Email:</label>
	<label><input type="email" name="email1Form" placeholder="apple@gmail.com" required=""></label>
	</div>
	<div>
	<label> Phone:</label>
	<label><input type="integer" name="phone1Form"placeholder="02102813704" required=""></label>
	</div>
	<div>
	<input type="submit"  class="btn btn-success align-middle" name="submitBtn" value="Add Contact">
	<input type="button"  class="btn btn-danger" name="cancelBtn" value="Cancel">	
	<input type="reset" class="btn btn-warning" name="submitBtn" value="Reset">	
	</div>
	</form>
</div>	 
@endsection
