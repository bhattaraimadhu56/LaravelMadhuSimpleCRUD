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
      <th scope="col">Action</th>

    </tr>


 	{{-- Use foreach loop here and repaeat the row 
  		Before using foreach loop go to controller and make functionof All contact--}}
  	@foreach($callmePage as $a)
    <tr>
      <td>{{$a->id}}</td>
      <td>{{$a->name}}</td>
      <td>{{$a->email}}</td>
      <td>{{$a->phone}}</td>
      <td><a href="{{URL::to('view_contact/'.$a->id)}}" class="btn btn-sm btn-info">View</a>
      	<a href="{{URL::to('edit_contact/'.$a->id)}}" class="btn btn-sm btn-success">Edit</a>
	      	<a href="{{URL::to('delete_contact/'.$a->id)}}" onclick=" return confirm('Are you sure, You want to delete permanently?')" class="btn btn-sm btn-danger">Delete</a>
	      	
	   </td>
    </tr>

     @endforeach
     {{-- <div> {{$a->links()}}</div> --}}
</table>
@endsection
