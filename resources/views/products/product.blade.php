@extends('layout.main')
@section('main_content')
    <div class="row clearfix px-2">
        <div class="col-md-6">
            <h2 class="h3 mb-4 text-gray-800">products </h2>  
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ url('products/create')}}" class="btn btn-primary"><i class="fa fa-plus mr-1"></i>New product</a>
        </div>
    </div>  
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Cost Price</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Cost Price</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <th>{{$product->id}}</th>
                            <th>{{$product->category->title}}</th>
                            <th>{{$product->title}}</th>
                            <th>{{$product->description}}</th>
                            <th>{{$product->cost_price}}</th>
                            <th>{{$product->price}}</th>
                            <th>
                                <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="POST">
                                    <div class="button-2">
                                        <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are Youre sure') " type="submit" class="btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </div>
                                </form>
                            </th>
                        </tr>                      
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection