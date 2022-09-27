@extends('admin.master')

@section('body')

    <h1 class="mt-4">Manage Products</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Manage your product data</li>
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
                        <th>Category Name</th>
                        <th>Brand Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->brand_name }}</td>
                        <td>{{ $product->category_name }}</td>
                        <td>{{ $product->description }}</td>
                        <td><img src="{{ $product->image }}" alt="" style="width: 80px; height: 80px"></td>
                        <td>
                            {{ $product->status == 0? 'Inactive' : 'Active' }}
                        </td>
                        <td>
                            <a href="{{ route('edit.product', ['id' => $product->id]) }}" class="btn btn-success btn-sm">Edit</a>
                            <a href="{{ route('delete.product', ['id' => $product->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    @endsection
