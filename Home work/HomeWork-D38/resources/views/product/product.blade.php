@extends('master')

@section('title')

    Product Page

@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Add Product</h3>
                            </div>
                            <div class="card-body">
                                <span>{{Session::has('message')? Session::get('message'):''}}</span>
                                <form action=" {{route('new-product')}} " method="post" enctype="maltipart/form-data">
                                    @csrf
                                    <div class="row mt-2">
                                        <label for="" class="col-md-4">Product Name</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="product_name">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <label for="" class="col-md-4">Category Name</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="category_name">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <label for="" class="col-md-4">Brand Name</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="brand_name">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <label for="" class="col-md-4">Product Price</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="product_price">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <label for="" class="col-md-4">Product Description</label>
                                        <div class="col-md-8">
                                            <textarea name="product_description" id="" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <label for="" class="col-md-4">Product Image</label>
                                        <div class="col-md-8">
                                            <input type="file" class="form-control" name="image" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <label for="" class="col-md-4"></label>
                                        <div class="col-md-8">
                                            <input type="submit" class="btn btn-success" value="Submit">
                                        </div>
                                    </div>
                            </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

@endsection
