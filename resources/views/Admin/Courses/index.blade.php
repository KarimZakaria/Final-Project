@extends('Admin.layout')

@section('title' , 'All Courses')

@section('content')


    <div class="d-flex justify-content-between mb-4 mt-4">
        <h5>Courses</h5>
        <a  class="btn btn-info" href="{{route('Admin.Courses.create')}}">Add Course</a>
    </div>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col" class="text-center">#</th>
            <th scope="col" class="text-center">Image</th>
            <th scope="col" class="text-center">Name</th>
            <th scope="col"class="text-center">Price</th>
            <th scope="col"class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($courses as $c)
            <tr>
                <th scope="row" class="text-center" >{{ $loop->iteration }}</th>
                <td class="text-center" >
                  <img src="{{asset('Uploads/Courses/'.$c->img)}}" height="50px" alt="">
                </td>
                <td class="text-center" >{{$c->name }}</td>
                <td class="text-center" >{{$c->price }}</td>
                <td class="text-center" >
                  <a href="{{route('Admin.Courses.edit' , $c->id )}}" class="btn btn-primary">Edit</a>
                  <a href="{{route('Admin.Courses.delete' , $c->id )}}" class="btn btn-danger">Delete</a>
                </td> 
            </tr>
            @endforeach
        </tbody>
      </table>
      <div class="mt-5 d-flex justify-content-center">
        {!!$courses->render()!!}
      </div>

    
@endsection