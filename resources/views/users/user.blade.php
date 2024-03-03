@extends('layout.main')
@section('main_content')
    <div class="row clearfix mb-4">
        <div class="col-md-6">
            <h2>Users </h2>  
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ url('users/create')}}" class="btn btn-primary"><i class="fa fa-plus mr-1"></i>New user</a>
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
                            <th>Group</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Group</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th>{{$user->id}}</th>
                            <th>{{$user->group->title }}</th>
                            <th>{{$user->name}}</th>
                            <th>{{$user->email}}</th>
                            <th>{{$user->phone}}</th>
                            <th>{{$user->address}}</th>
                            <th>{{$user->created_at}}</th>
                            <th>
                                <form action="{{url('users/'.$user->id)}}" method="POST">
                                    <div class="button-2">
                                        <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
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