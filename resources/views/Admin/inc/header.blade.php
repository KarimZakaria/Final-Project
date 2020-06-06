<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>@yield('title')</title>

</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top mb-5 ">
       <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('Admin.Cat.index')}}">Categories</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('Admin.Trainer.index')}}">Trainers</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('Admin.Courses.index')}}">Courses</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('Admin.Students.index')}}">Students</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../../../../../karimProduct/index.php">Jobs</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('Admin.Auth.logout')}}">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

