@extends('layout.main')
@section('main_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">New Group</h6>
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card card-body shadow">
                    <form action="/groups" method="POST">
                        @csrf
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="title" class="form-label">Group Title :</label>
                                <input type="title" class="form-control" name="title" id="title" placeholder="Enter Your title" value="<?php value('title'); ?>">
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="add_group" class="btn btn-success" value="Add Group">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection




