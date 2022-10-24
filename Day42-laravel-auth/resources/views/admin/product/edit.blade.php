@extends('admin.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="card">
                    <h2 class="text-center">Edit Products</h2>
                    <div class="card-body">
                        {{--                        {{Sessio::has}}--}}
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Product Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Category Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="category_name" value="{{$product->category_name}}" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Brand Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="brand_name" value="{{$product->brand_name}}" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" class="form-control" id="" cols="30" rows="5">{{$product->description}}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image"  class="form-control" accept="image/*">
                                    <img src="{{asset($product->image)}}" alt="" style="height: 80px;">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Price</label>
                                <div class="col-md-8">
                                    <input type="number" value="{{$product->product_price}}" name="product_price" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Status</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" {{ $product->status == 1? 'checked' : '' }} name="status" value="1" class="">Published</label>
                                    <label for=""><input type="radio" {{ $product->status == 0? 'checked' : '' }} name="status" value="0" class="">Unpublished</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success" value="Add Product" >
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

