@extends('master')

@section('title')
    Student Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-secondary">
                            <h3 class="text-center">All students info</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $key => $student)
                                <tr>
                                    <td>{{ ++$key}}</td>
                                    <td>{{ $student['name'] }}</td>
                                    <td>{{ $student['phone'] }}</td>
                                    <td>{{ $student['address'] }}</td>
                                    <td>
                                        <img src="{{ asset($student['image']) }}" style="height: 100px; width: 100px;" alt="">
                                    </td>

                                    <td>
                                        <a href="" class="nav-link">view</a>
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
