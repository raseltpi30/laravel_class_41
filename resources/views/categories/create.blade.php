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
@if (isset($category))
    <h2 class="h3 mb-4 text-gray-800">Update Category</h2>
@else
    <h2 class="h3 mb-4 text-gray-800">Add New Category</h2>
@endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        @if (isset($category))
            <h3 class="text-xs font-weight-bold text-primary text-uppercase mb-1">Update Category</h3>
        @else
            <h3 class="text-xs font-weight-bold text-primary text-uppercase mb-1">New user</h3>
        @endif
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card card-body shadow">
                    @if (isset($category))
                        {!! Form::model($category,[ 'route' => ['categories.update',$category->id], 'method' => 'put' ]) !!}                            
                    @else
                        {!! Form::open([ 'route' => 'categories.store', 'method' => 'post' ]) !!}
                    @endif	
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="name" class="form-label">Title :</label>
                                {{ Form::text('title',NULL, ['class' => 'form-control' , 'id' => 'title' , 'placeholder' => 'Category Title'])}}
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="add_title" class="btn btn-success" value="Add Category">
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection




