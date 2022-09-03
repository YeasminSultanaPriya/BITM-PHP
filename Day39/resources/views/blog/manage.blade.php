@extends('master')

@section('title')
    Manage Blog
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">MANAGE BLOGS</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$blog->blog_title}}</td>
                                        <td>{{$blog->blog_author}}</td>
                                        <td>{{$blog->blog_description}}</td>
                                        <td>
                                            <img src="{{asset($blog->image)}}" style="height: 100px; width: 100px;" alt="">
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning">
                                                <i class="fa-regular fa-edit"></i>
                                            </a>
                                            <a href="{{route('delete-blog',['id' =>$blog->id])}}}" onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger">
                                                <i class="fa-regular fa-trash"></i>
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
