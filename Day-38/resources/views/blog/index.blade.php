@extends('master')

@section('title')
    Blog Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <h3 class="text-center">Add Blog</h3>
                    <div class="card-body">
                        <span>{{Session::has('message')? Session::get('message'):''}}</span>
                        <form action="{{route('new-blog')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <label class="col-md-4" for="">Blog Title</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="blog_title">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label class="col-md-4" for="">Blog Author</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="blog_author">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label class="col-md-4" for="">Blog Description</label>
                                <div class="col-md-8">
                                    <textarea name="blog_description" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label class="col-md-4" for="">Image</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control" name="image" accept="image/*">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success float-end" value="Add Blog">
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
