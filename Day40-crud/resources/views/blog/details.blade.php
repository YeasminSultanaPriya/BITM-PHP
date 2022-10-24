@extends('master')

@section('title')
    Blog Details
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <img src="{{asset($blog->image)}}" style="height: 300px;" class="card-img-top" alt="">
                </div>
                <div class="col-md-8">
                    <h3>{{ $blog->blog_title }}</h3>
                    <p>{{ $blog->blog_author }}</p>
                    <p>{{ $blog->blog_description }}</p>
                </div>

            </div>
        </div>
    </section>

@endsection

