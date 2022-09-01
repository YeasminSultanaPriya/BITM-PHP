@extends('masterOne')
@section('title')
    Student Details
@endsection

@section('body')
  <section class="py-5">
      <div class="container">
          <div class="row">
              <div class="col-md-5">
                  <div>
                      <img src="{{asset($student['image'])}}" alt="" class="img-fluid">
                  </div>
              </div>
              <div class="col-md-7">
                  <div class="card card-body">
                      <h2>Name:{{$student['name']}}</h2>
                      <p class="mt-3">Phone: {{$student['phone']}}</p>
                      <p>Address:{{$student['address']}}</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection

