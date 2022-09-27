@extends('admin.master')

@section('body')

    <h1 class="mt-4">Add User</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Insert User Data Here.</li>
    </ol>

    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card card-body">

                @if(Session::has('message'))
                    <span class="bg-primary text-white text-center">{{ Session::get('message') }}</span>
                    @endif

                <form action="{{ route('new.user') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row m-1">
                        <label for="" class="col-md-4">User Name</label>
                        <div class="col-md-8">
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="row m-1">
                        <label for="" class="col-md-4">Email</label>
                        <div class="col-md-8">
                            <input type="text" name="email" class="form-control">
                        </div>
                    </div>

                    <div class="row m-1">
                        <label for="" class="col-md-4">Image</label>
                        <div class="col-md-8">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                    <div class="row m-1">
                        <label for="" class="col-md-4">Password</label>
                        <div class="col-md-8">
                            <input type="text" name="password" class="form-control">
                        </div>
                    </div>

                    <div class="row m-1">
                        <div class="col-md-1" style="margin-left: auto">
                            <input type="submit" class=" btn btn-primary">
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>

@endsection
