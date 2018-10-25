@extends('index')
@section('content')

{{-- <h1> All Contacts Displaying here</h1> --}}

{{-- Bring table code from given link i.e bootstrap  table
https://getbootstrap.com/docs/4.1/content/tables/ --}}
<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer></script>
<table class="table table-hover table-active">

    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      

    </tr>


 	{{-- Here single_con comes from the controller with function with with takes two parameter --}}
  	
    <tr>
      <td>{{$single_con->id}}</td>
      <td>{{$single_con->name}}</td>
      <td>{{$single_con->email}}</td>
      <td>{{$single_con->phone}}</td>
      
	   
    </tr>

   
</table>
@endsection
































@extends('index')
@section('content')

{{-- <h1> All Contacts Displaying here</h1> --}}

{{-- Bring table code from given link i.e bootstrap  table
https://getbootstrap.com/docs/4.1/content/tables/ --}}
<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer></script>
<table class="table table-hover table-active">
{{-- Give way to link to view all data i.e path to route --}}
<a href="{{URL::to('allContact')}}" class="btn btn-outline-info">View All Data </a>


{{-- Here  single_con has been passed from with () funtion with two parameter from controller ViewContact Mathod--}}
   <tr><th scope="col">ID</th> <td>{{$single_con->id}}</td> </tr>

   <tr><th scope="col">Name</th> <td>{{$single_con->name}}</td> </tr> 

   <tr> <th scope="col">Email</th> <td>{{$single_con->email}}</td></tr>

   <tr><th scope="col">Phone</th>  <td>{{$single_con->phone}}</td></tr>
      
        
    
    	
</table>	      	
	 
    


@endsection
