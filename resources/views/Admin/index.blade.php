@extends('Admin.layout')

@section('title' , 'Dashboard') <!-- Title Exchanged -->

@section('content')


<div class="text-danger text-bold">This Is Our Dashboard</div>

<div class="container">

    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="card bg-light">
                <div class="card-header">All Students </div>
                <div class="card-body">{{$students}}</div>
                <a href="" class="btn btn-primary">Show Students</a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card bg-light">
                <div class="card-header">All Students </div>
                <div class="card-body">{{$students}}</div>
                <a href="{{route('Front.contact')}}" class="btn btn-primary">Show Courses</a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card bg-light">
                <div class="card-header">All Students </div>
                <div class="card-body">{{$students}}</div>
                <a href="{{route('Front.contact')}}" class="btn btn-primary">Show Trainers </a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card bg-light">
                <div class="card-header">All Students </div>
                <div class="card-body">{{$students}}</div>
                <a href="{{route('Front.contact')}}" class="btn btn-primary">Show Categories</a>
            </div>
        </div>

        

    </div>

    
</div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

@endsection
