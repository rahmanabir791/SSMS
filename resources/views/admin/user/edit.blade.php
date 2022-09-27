@extends('admin.master')

@section('body')

    <h1 class="mt-4">Update User</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Update User Data Here.</li>
    </ol>

    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card card-body">



                <form action="{{ route('update.user', ['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row m-1">
                        <label for="" class="col-md-4">User Name</label>
                        <div class="col-md-8">
                            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                        </div>
                    </div>
                    <div class="row m-1">
                        <label for="" class="col-md-4">Email</label>
                        <div class="col-md-8">
                            <input type="text" name="email" class="form-control" value="{{ $user->email }}">
                        </div>
                    </div>

                    <div class="row m-1">
                        <label for="" class="col-md-4">Image</label>
                        <div class="col-md-8">
                            <img src="{{ asset($user->image) }}" alt="{{ $user->name }}'s image"
                                 style="height: 120px;
                                  width: 120px;
                                   border-radius: 5%;
                                   object-fit: cover">
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
                            <input type="submit" value="Update" class=" btn btn-primary">
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>

@endsection
