@extends('layout.main')
@section('main_content')
    <div class="row clearfix mb-4">
        <div class="col-md-6">
            <h2>User Groups</h2>  
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ url('groups/create')}}" class="btn btn-primary"><i class="fa fa-plus mr-1"></i>New Group</a>
        </div>
    </div>  
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th style="margin: auto">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($groups as $group)
                        <tr>
                            <th>{{$group->id}}</th>
                            <th>{{$group->title}}</th>
                            <th class=" text-center">
                                <form action="{{url('groups/'.$group->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are Youre sure') " type="submit" class="btn-sm btn-danger"><i class="fa fa-trash">&nbsp; Delete</i></button>
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