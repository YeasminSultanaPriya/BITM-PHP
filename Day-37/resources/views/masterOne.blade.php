<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.css" />
</head>
<body>
{{--<h3 class="text-danger">hello master</h3>--}}
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">logo</a>
        <ul class="navbar-nav ms-auto">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{url('/about')}}" class="nav-link">About</a></li>
            <li><a href="{{route('students')}}" class="nav-link">Students</a></li>
            <li><a href="{{route('full-name')}}" class="nav-link">Full Name</a></li>
            <li><a href="{{route('calculator')}}" class="nav-link">Calculator</a></li>
        </ul>
    </div>
</nav>
@yield('body')
</body>
</html>
