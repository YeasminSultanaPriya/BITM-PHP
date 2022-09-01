@extends('master')

@section('title')
    News page
@endsection

@section('body')

<section class="py-5">
    <div class="container">
        <div class="row">
        @foreach($news as $news)
                <div class="col-md-4 mt-4">
                        <div class="card p-3">
                            <div class="card-header">
                                <h5 class="fw-semibold">{{$news['headline'] }}</h5>
                            </div>
                            <div class="card-body">
                                <img src="{{ asset($news['image']) }}" style="height: 120px; width: 250px;" alt="">
                                <p>{{ $news['reporter'] }}</p>
                                <p class="text-justify f-s-14">{{ $news['description']}} </p>
                                <p>{{ $news['time'] }}</p>
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection