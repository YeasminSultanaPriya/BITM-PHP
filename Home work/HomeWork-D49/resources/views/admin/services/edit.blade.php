@extends('admin.master')

@section('title')
    Edit Service

@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card" style="border: 1px solid lightgrey">
                        <div class="card-header">
                            <h3 class="text-center">Add Service </h3>
                        </div>
                        <div class="card-body">

                            <form action="{{route('services.update', $service->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Service Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="service_title" value="{{$service->service_title}}" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" id="summernote" cols="30" rows="10">{!! $service->description !!}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" accept="image/*">
                                        <img src="{{asset($service->image)}}" style="height: 80px; width: 80px;" alt="">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" {{$service->status==1?'checked':''}} value="1">Published</label>
                                        <label for=""><input type="radio" name="status" {{$service->status==0?'checked':''}} value="0">Unpublished</label>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit"  class="btn btn-success" value="Update Service">
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


