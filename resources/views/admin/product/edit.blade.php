@extends('admin.master')

@section('body')

    <h1 class="mt-4">Update Product</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Update Product Data Here.</li>
    </ol>

    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card card-body">



                <form action="{{ route('update.product', ['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row m-1">
                        <label for="" class="col-md-4">Product Name</label>
                        <div class="col-md-8">
                            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                        </div>
                    </div>
                    <div class="row m-1">
                        <label for="" class="col-md-4">Category Name</label>
                        <div class="col-md-8">
                            <input type="text" name="category_name" class="form-control" value="{{ $product->category_name }}">
                        </div>
                    </div>
                    <div class="row m-1">
                        <label for="" class="col-md-4">Brand Name</label>
                        <div class="col-md-8">
                            <input type="text" name="brand_name" class="form-control" value="{{ $product->brand_name }}">
                        </div>
                    </div>
                    <div class="row m-1">
                        <label for="" class="col-md-4">Description</label>
                        <div class="col-md-8">
                            <textarea name="description" id="" cols="30" rows="7" class="form-control">{{ $product->description }}</textarea>
                        </div>
                    </div>

                    <div class="row m-1">
                        <label for="" class="col-md-4">Image</label>
                        <div class="col-md-8">
                            <img src="{{ asset($product->image) }}" alt="" class="card-img-top" style="height: 100px; width: 100px">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                    <div class="row m-1">
                        <label for="" class="col-md-4">Status</label>
                        <div class="col-md-8">
                            <label for=""><input type="radio" name="status" value="1" {{ $product->status == 1? 'checked' : '' }}>Active </label>
                            <label for=""><input type="radio" name="status" value="0" {{ $product->status == 0? 'checked' : '' }}>Inactive </label>
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
