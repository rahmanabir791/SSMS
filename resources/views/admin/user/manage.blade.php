@extends('admin.master')

@section('body')

    <h1 class="mt-4">Manage Users</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Manage User Details</li>
    </ol>
    @if(Session::has('message'))
        <span class="bg-primary text-white text-center">{{ Session::get('message') }}</span>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body shadow-lg">
                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><img src="{{ asset($user->image) }}" alt="{{ $user->name }}'s image"
                                 style="height: 80px;
                                  width: 80px;
                                   border-radius: 50%;
                                   object-fit: cover">
                        </td>

                        <td>
                            <a href="{{ route('edit.user', ['id' => $user->id]) }}" class="btn btn-success btn-sm">Edit</a>
                            <a href="{{ route('delete.user', ['id' => $user->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    @endsection
