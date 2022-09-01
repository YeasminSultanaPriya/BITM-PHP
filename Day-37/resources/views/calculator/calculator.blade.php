@extends('masterOne')

@section('title')
    Calculator
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3>Calculator</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('calculator')}}" method="post">
                                @csrf
                                <div class="mt-2">
                                    <label for="">First NUmber</label>
                                    <input type="text" class="form-control" name="first_number">
                                </div>
                                <div class="mt-2">
                                    <label for="">Second Number</label>
                                    <input type="text" class="form-control" name="second_number">
                                </div>
                                <div>
                                    <label for="">Select</label>
                                    <label for=""><input type="radio" name="choice" value="+">+</label>
                                    <label for=""><input type="radio" name="choice" value="-">-</label>
                                    <label for=""><input type="radio" name="choice" value="*">*</label>
                                    <label for=""><input type="radio" name="choice" value="/">/</label>
                                    <label for=""><input type="radio" name="choice" value="%">%</label>
                                </div>
                                <div class="mt-2">
                                    <label for="">Result</label>
                                    <input type="text" class="form-control" value="{{ Session::has('result')? Session::get('result'):'' }}" name="get-result">
                                </div>
                                <div class="mt-2">
                                    <input type="submit" class="btn btn-success" value="Get Result">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
