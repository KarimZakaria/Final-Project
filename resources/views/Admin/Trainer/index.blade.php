@extends('Admin.layout')

@section('title' , 'All Trainers')

@section('content')


    <div class="d-flex justify-content-between mb-4 mt-4">
        <h5>Trainers</h5>
        <a  class="btn btn-info" href="{{route('Admin.Trainer.create')}}"> Want To Add YourSelf ?</a>
    </div>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col" class="text-center">#</th>
            <th scope="col" class="text-center">Image</th>
            <th scope="col" class="text-center">Name</th>
            <th scope="col"class="text-center">Phone</th>
            <th scope="col"class="text-center">Speciality</th>
            <th scope="col"class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trainers as $trainer)
            <tr>
                <th scope="row" class="text-center" >{{ $loop->iteration }}</th>
                <td class="text-center" >
                  <img src="{{asset('Uploads/Trainers/'.$trainer->img)}}" height="50px" alt="">
                </td>
                <td class="text-center" >{{$trainer->name }}</td>
                <td class="text-center" >
                  @if ($trainer->phone !== null )
                    {{$trainer->phone }}
                  @else 
                    Not Exist
                  @endif
                </td>
                <td class="text-center" >{{$trainer->spec }}</td>
                <td class="text-center" >
                  <a href="{{route('Admin.Trainer.edit' , $trainer->id )}}" class="btn btn-primary">Edit</a>
                  <a href="{{route('Admin.Trainer.delete' , $trainer->id )}}" class="btn btn-danger">Delete</a>
                </td> 
            </tr>
            @endforeach
        </tbody>
      </table>


    
@endsection