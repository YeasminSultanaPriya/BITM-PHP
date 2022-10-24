@extends('admin.master')

@section('title')
    Manage Service
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 card mx-auto">
                    <h3 class="text-center pt-3">Manage Service </h3>
                    <div class="card-body">
                        <table id="datatable" class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Service Title</th>
                                <th>Blog Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $service)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$service->service_title}}</td>
                                    <td>{!! \Illuminate\Support\Str::words($service->description, 20) !!}</td>
                                    <td>
                                        <img src="{{asset($service->image)}}" style="height: 80px; width: 80px;" alt="">
                                    </td>
                                    <td>{{$service->status==1?'Published':'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('services.edit',$service->id)}}" class="btn btn-sm btn-warning"><i class="bx bx-edit"></i></a>
                                        <form action="{{route('services.destroy',$service->id)}}" method="post" style="display: inline-block;" onclick="return confirm('Are you sure to delete this?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="bx bx-trash"></i>
                                            </button>
                                        </form>
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



