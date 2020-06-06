@extends('Admin.layout')

@section('title' , 'All Students')

@section('content')


    <div class="d-flex justify-content-between mb-4 mt-4">
        <h5>Students</h5>
        <a  class="btn btn-info" href="{{route('Admin.Students.create')}}"> Add New Student</a>
    </div>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col" class="text-center">#</th>
            <th scope="col"class="text-center">Name</th>
            <th scope="col"class="text-center">Email</th>
            <th scope="col"class="text-center">Spec</th>
            <th scope="col"class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <th scope="row" class="text-center" >{{ $loop->iteration }}</th>
                <td class="text-center" >{{$student->name }}</td>
                <td class="text-center" >{{$student->email }}</td>
                <td class="text-center" >{{$student->spec }}</td>
                <td class="text-center" >
                  <a href="{{route('Admin.Students.edit' , $student->id )}}" class="btn btn-primary">Edit</a>
                  <a href="{{route('Admin.Students.delete' , $student->id )}}" class="btn btn-danger">Delete</a>
                  <a href="{{route('Admin.Students.showCourses' , $student->id )}}" class="btn btn-info">Show Courses</a>
                </td> 
            </tr>
            @endforeach
        </tbody>
      </table>
      <div class="mt-5 d-flex justify-content-center">
        {!!$students->render()!!}
      </div>


    
@endsection