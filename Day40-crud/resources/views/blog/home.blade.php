@extends('master')

@section('title')
    Home Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset($blog['image'])}}" style="height: 300px;" class="card-img-top" alt="">
                        <div class="card-body">
                            <h3>{{ $blog->blog_title }}</h3>
                            <p>{{ $blog->blog_author }}</p>
                            <p></p>
                            <a href="{{route('details-blog',['id'=>$blog->id])}}" class="float-end btn btn-warning">Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
