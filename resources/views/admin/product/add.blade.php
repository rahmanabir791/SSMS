@extends('admin.master')

@section('body')

    <h1 class="mt-4">Add Product</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Add Product Data Here.</li>
    </ol>

    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card card-body">

                @if(Session::has('message'))
                    <span class="bg-primary text-white text-center">{{ Session::get('message') }}</span>
                    @endif

                <form action="{{ route('new.product') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row m-1">
                        <label for="" class="col-md-4">Product Name</label>
                        <div class="col-md-8">
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="row m-1">
                        <label for="" class="col-md-4">Category Name</label>
                        <div class="col-md-8">
                            <input type="text" name="category_name" class="form-control">
                        </div>
                    </div>
                    <div class="row m-1">
                        <label for="" class="col-md-4">Brand Name</label>
                        <div class="col-md-8">
                            <input type="text" name="brand_name" class="form-control">
                        </div>
                    </div>
                    <div class="row m-1">
                        <label for="" class="col-md-4">Description</label>
                        <div class="col-md-8">
                            <textarea name="description" id="" cols="30" rows="7" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row m-1">
                        <label for="" class="col-md-4">Image</label>
                        <div class="col-md-8">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                    <div class="row m-1">
                        <label for="" class="col-md-4">Status</label>
                        <div class="col-md-8">
                            <label for=""><input type="radio" name="status" value="1" checked>Active </label>
                            <label for=""><input type="radio" name="status" value="0">Inactive </label>
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
