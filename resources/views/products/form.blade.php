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
@if (isset($product))
    <div class="row clearfix">
        <div class="col-md-6">
            <h2 class="h3 mb-4 text-gray-800">Update product information</h2>  
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ url('products')}}" class="btn btn-primary"><i class="fa fa-reply mr-1"></i>Back</a> 
        </div>
    </div>
@else
<div class="row clearfix">
    <div class="col-md-6">
        <h2 class="h3 mb-4 text-gray-800">Add New product</h2>  
    </div>
    <div class="col-md-6 text-right">
        <a href="{{ url('products')}}" class="btn btn-primary"><i class="fa fa-reply mr-1"></i>Back</a> 
    </div>
</div>
@endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-md-8 offset-md-3 mt-5">
                <div class="card card-body shadow">
                    @if (isset($product))
                        {!! Form::model($product,[ 'route' => ['products.update',$product->id], 'method' => 'put' ]) !!}                            
                    @else
                        {!! Form::open([ 'route' => 'products.store', 'method' => 'post' ]) !!}
                    @endif	
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="category" class="form-label">Select category :</label>
                                {{ Form::select('category_id',$categories,NULL,['class' => 'form-control' , 'id' => 'category', 'placeholder' => 'Select category'])}}
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">title :</label>
                                {{ Form::text('title',NULL, ['class' => 'form-control' , 'id' => 'title' , 'placeholder' => 'Enter Product Title'])}}
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Description :</label>
                                {{ Form::textarea('description',NULL, ['class' => 'form-control' , 'id' => 'description' , 'placeholder' => 'Enter Product Description'])}}
                            </div>                            
                            <div class="mb-3">
                                <label for="cost_price" class="form-label">Cost Price :</label>
                                {{ Form::number('cost_price',NULL, ['class' => 'form-control' , 'id' => 'cost_price' , 'placeholder' => 'Enter Product cost_price'])}}
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price :</label>
                                {{ Form::number('price',NULL, ['class' => 'form-control' , 'id' => 'price' , 'placeholder' => 'Enter Product price'])}}
                            </div>   
                            @if (isset($product))
                                <div class="mb-3">
                                    <input type="submit" name="update_product" class="btn btn-success" value="Update product">
                                </div>
                            @else
                                <div class="mb-3">
                                    <input type="submit" name="add_product" class="btn btn-success" value="Add product">
                                </div>
                            @endif                         
                            
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
