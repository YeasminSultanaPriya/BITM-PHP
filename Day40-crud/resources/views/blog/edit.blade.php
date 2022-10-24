@extends('master')

@section('title')
    Edit Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <h3 class="text-center">Edit Blog</h3>
                        <div class="card-body">
                            <span>{{Session::has('message')? Session::get('message'):''}}</span>
                            <form action="{{ route('update-blog') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                <div class="row">
                                    <label class="col-md-4" for="">Blog Title</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="blog_title" value="{{ $blog->blog_title }}" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="col-md-4" for="">Blog Author</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="blog_author" value="{{ $blog->blog_author }}" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="col-md-4" for="">Blog Description</label>
                                    <div class="col-md-8">
                                        <textarea name="blog_description" class="form-control" id="" cols="30" rows="10">{{ $blog->blog_description }}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="col-md-4" for="">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control" name="image" accept="image/*">
                                        <img src="{{ asset($blog->image) }}" alt="" class="mt-2" style="height: 100px; width: 100px" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success float-end" value="Update Blog" />
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

