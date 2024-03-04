@extends('layout.main')
@section('main_content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>      
    </div>  
@endif
@if (isset($user))
    <div class="row clearfix">
        <div class="col-md-6">
            <h2 class="h3 mb-4 text-gray-800">Update user information</h2>  
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ url('users')}}" class="btn btn-primary"><i class="fa fa-reply mr-1"></i>Back</a> 
        </div>
    </div>
@else
<div class="row clearfix">
    <div class="col-md-6">
        <h2 class="h3 mb-4 text-gray-800">Add New User</h2>  
    </div>
    <div class="col-md-6 text-right">
        <a href="{{ url('users')}}" class="btn btn-primary"><i class="fa fa-reply mr-1"></i>Back</a> 
    </div>
</div>
@endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card card-body shadow">
                    @if (isset($user))
                        {!! Form::model($user,[ 'route' => ['users.update',$user->id], 'method' => 'put' ]) !!}                            
                    @else
                        {!! Form::open([ 'route' => 'users.store', 'method' => 'post' ]) !!}
                    @endif	
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="group" class="form-label">Select Group :</label>
                                {{ Form::select('group_id',$groups,NULL,['class' => 'form-control' , 'id' => 'group', 'placeholder' => 'Select Group'])}}
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name :</label>
                                {{ Form::text('name',NULL, ['class' => 'form-control' , 'id' => 'name' , 'placeholder' => 'Enter Customer Name'])}}
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Email :</label>
                                {{ Form::email('email',NULL, ['class' => 'form-control' , 'id' => 'email' , 'placeholder' => 'Enter Customer Email'])}}
                            </div>                            
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number :</label>
                                {{ Form::number('phone',NULL, ['class' => 'form-control' , 'id' => 'phone' , 'placeholder' => 'Enter Customer Phone'])}}
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address :</label>
                                {{ Form::text('address',NULL, ['class' => 'form-control' , 'id' => 'address' , 'placeholder' => 'Enter Customer Address'])}}
                            </div>                            
                            <div class="mb-3">
                                <label for="password" class="form-label">Password :</label>
                                {{ Form::password('password',['class' => 'form-control' , 'id' => 'password' , 'placeholder' => 'Enter Customer Password'])}}
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="add_user" class="btn btn-success" value="Add user">
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection




