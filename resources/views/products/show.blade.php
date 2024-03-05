@extends('layout.main')
@section('main_content')
    <div class="row clearfix mb-4">
        <div class="col-md-4">
            <a href="{{ url('products')}}" class="btn btn-primary"><i class="fa fa-reply mr-1"></i>Back</a> 
        </div>
        <div class="col-md-8 text-right">            
            <a href="{{ url('products')}}" class="btn btn-info mr-1"><i class="fa fa-plus mr-1"></i>New Sale</a>
            <a href="{{ url('products')}}" class="btn btn-info mr-1"><i class="fa fa-plus mr-1"></i>New Purchase</a>
            <a href="{{ url('products')}}" class="btn btn-info mr-1"><i class="fa fa-plus mr-1"></i>New Payment</a>
            <a href="{{ url('products')}}" class="btn btn-info mr-1"><i class="fa fa-plus mr-1"></i>New Receipt</a>
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
                            <th class="text-right">Category :</th>
                            <td>{{$product->category->title}}</td>
                        </tr>
                        <tr>
                            <th class="text-right">Name :</th>
                            <td>{{$product->title}}</td>
                        </tr>
                        <tr>
                            <th class="text-right">Description :</th>
                            <td>{{$product->description}}</td>
                        </tr>
                        <tr>
                            <th class="text-right">Cost Price :</th>
                            <td>{{$product->cost_price}}</td>
                        </tr>
                        <tr>
                            <th class="text-right">Price :</th>
                            <td>{{$product->price}}</td>
                        </tr>
                        <tr>
                            <th class="text-right">Created At :</th>
                            <td>{{$product->created_at}}</td>
                        </tr>
                    </table>                    
                </div>
            </div>
        </div>
    </div>
@endsection