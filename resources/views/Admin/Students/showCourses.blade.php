@extends('Admin.layout')

@section('title' , 'Student Courses')

@section('content')


    <div class="d-flex justify-content-between mb-4 mt-4">
        <h5>Student Courses</h5>
        <a  class="btn btn-info" href="{{route('Admin.Students.index')}}">Back</a>
    </div>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col" class="text-center">#</th>
            <th scope="col"class="text-center">Course Name</th>
            <th scope="col"class="text-center">Status</th>
            <th scope="col"class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <th scope="row" class="text-center" >{{ $loop->iteration }}</th>
                    <td class="text-center">{{$course->name }}</td> 
                    <td class="text-center">{{$course->pivot->status }}</td> 
                    <td class="text-center" >
                        @if($course->pivot->status !== 'Approved' )
                            <a href="{{route('Admin.Students.approveCourse' , [$student_id ,$course->id])}}" class="btn btn-primary">Approve</a>
                        @endif
                        
                        @if($course->pivot->status !== 'Reject')
                            <a href="{{route('Admin.Students.rejectCourse' , [$student_id ,$course->id])}}" class="btn btn-danger">Reject</a>
                        @endif
                    </td> 
                </tr>
            @endforeach
        </tbody>
      </table>


@endsection