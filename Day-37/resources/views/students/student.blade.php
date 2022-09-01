
@extends('masterOne')
@section('title')
    Student page
@endsection

@section('body')
{{--   <h2> This is Student page</h2>--}}
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>All Students</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $key=> $student)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$student['name']}}</td>
                                    <td>{{$student['phone']}}</td>
                                    <td>{{$student['address']}}</td>

                                    <td>
                                        <img src="{{$student['image']}}" alt="" style="height: 40px; width: 40px">
                                        </td>
                                    <td>
                                        <a href="{{route('student-details',['id'=>$student['id']])}}" class="nav-link">view</a>
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
