@extends('masterOne')

@section('title')
    Full Name
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3>Full Name</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('get-full-name')}}" method="post">
                                @csrf
                                <div class="mt-2">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control" name="first_name">
                                </div>
                                <div class="mt-2">
                                    <label for="">Lat Name</label>
                                    <input type="text" class="form-control" name="last_name">
                                </div>
                                <div class="mt-2">
                                    <label for="">Full Name</label>
                                    <input type="text" class="form-control" value="{{ Session::has('result')? Session::get('result'):'' }}" name="full_name">
                                </div>
                                <div class="mt-2">
                                    <input type="submit" class="btn btn-success" value="Get Full Name">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
