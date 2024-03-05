@extends('users.user_layout')

@section('user_content')

	<div class="card shadow mb-4">
	    <div class="card-header py-3">
	      <h6 class="m-0 font-weight-bold text-primary"> {{ $user->name }} </h6>
	    </div>
	    
	    <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Group</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Group</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($user->sales as $sale)
                        <tr>
                            <th>{{$sale->id}}</th>
                            <th>{{$sale->challan_no }}</th>
                            <th>{{$sale->date}}</th>
                            <th>
                                <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
                                    <div class="button-2">
                                        <a href="{{ route('users.show', ['user' => $user->id]) }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
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

@stop