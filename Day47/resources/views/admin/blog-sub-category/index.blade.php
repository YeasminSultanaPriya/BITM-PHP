@extends('admin.master')

@section('title')
    Manage Sub Blog
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 card mx-auto">
                    <h3 class="text-center pt-3">Manage Blog Sub Category</h3>
                    <div class="card-body">
                        <table id="datatable" class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Sub Category Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogSubCategories as $blogSubCategory)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$blogSubCategory->blogCategory->category_name}}</td>
                                    <td>{{$blogSubCategory->sub_category_name}}</td>
                                    <td>{{$blogSubCategory->status==1?'Published':'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('blog-sub-categories.edit',$blogSubCategory->id)}}" class="btn btn-sm btn-warning"><i class="bx bx-edit"></i></a>
                                        <a href="{{route('delete-blog-category',['id'=>$blogSubCategory->id])}}" onclick="return confirm('Are you sure to delete this?')" class="btn btn-sm btn-danger"><i class="bx bx-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

