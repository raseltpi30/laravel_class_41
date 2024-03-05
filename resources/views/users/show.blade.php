{{-- @extends('layout.main')
@section('main_content')
    <div class="row clearfix mb-4">
        <div class="col-md-4">
            <a href="{{ url('users')}}" class="btn btn-primary"><i class="fa fa-reply mr-1"></i>Back</a> 
        </div>
        <div class="col-md-8 text-right">            
            <a href="{{ url('users')}}" class="btn btn-info mr-1"><i class="fa fa-plus mr-1"></i>New Sale</a>
            <a href="{{ url('users')}}" class="btn btn-info mr-1"><i class="fa fa-plus mr-1"></i>New Purchase</a>
            <a href="{{ url('users')}}" class="btn btn-info mr-1"><i class="fa fa-plus mr-1"></i>New Payment</a>
            <a href="{{ url('users')}}" class="btn btn-info mr-1"><i class="fa fa-plus mr-1"></i>New Receipt</a>
        </div>
    </div>  
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <table class="table table-striped">
                        <tr>
                            <th class="text-right">Group :</th>
                            <td>{{$user->group->title}}</td>
                        </tr>
                        <tr>
                            <th class="text-right">Name :</th>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <th class="text-right">Email :</th>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <th class="text-right">Phone Number :</th>
                            <td>{{$user->phone}}</td>
                        </tr>
                        <tr>
                            <th class="text-right">Address :</th>
                            <td>{{$user->address}}</td>
                        </tr>
                        <tr>
                            <th class="text-right">Created At :</th>
                            <td>{{$user->created_at}}</td>
                        </tr>
                    </table>                    
                </div>
            </div>
        </div>
    </div>
@endsection --}}
@extends('users.user_layout')

@section('user_content')

	<div class="card shadow mb-4">
	    <div class="card-header py-3">
	      <h6 class="m-0 font-weight-bold text-primary"> {{ $user->name }} </h6>
	    </div>
	    
	    <div class="card-body">
	    	<div class="row clearfix justify-content-md-center">
	    		<div class="col-md-8">
	    			<table class="table table-borderless table-striped">
			      	<tr>
			      		<th class="text-right">Group :</th>
			      		<td> {{ $user->group->title }} </td>
			      	</tr>
			      	<tr>
			      		<th class="text-right">Name : </th>
			      		<td> {{ $user->name }} </td>
			      	</tr>
			      	<tr>
			      		<th class="text-right">Eamil : </th>
			      		<td> {{ $user->email }} </td>
			      	</tr>
			      	<tr>
			      		<th class="text-right">Phone : </th>
			      		<td> {{ $user->phone }} </td>
			      	</tr>
			      	<tr>
			      		<th class="text-right">Address : </th>
			      		<td> {{ $user->address }} </td>
			      	</tr>
				     </table>
	    		</div>
	    	</div>
	    </div>

	</div>

@stop