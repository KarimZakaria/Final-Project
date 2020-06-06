@extends('Admin.layout')

@section('title' , 'All Categories')

@section('content')


    <div class="d-flex justify-content-between mb-4 mt-4">
        <h5>Categories</h5>
        <a  class="btn btn-info" href="{{route('Admin.Cat.create')}}"> Add New Cat</a>
    </div>

    <div class="container">
      @if(session()->has('success'))
        <div class="alert alert-success text-center">
            {{ session()->get('success') }}
        </div>
      @endif
    </div>
    

    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col" class="text-center">#</th>
            <th scope="col"class="text-center">Name</th>
            <th scope="col"class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($cats as $cat)
            <tr>
                <th scope="row" class="text-center" >{{ $loop->iteration }}</th>
                <td class="text-center" >{{$cat->name }}</td>
                <td class="text-center" >
                  <a href="{{route('Admin.Cat.edit' , $cat->id )}}" class="btn btn-primary">Edit</a>
                  <a href="{{route('Admin.Cat.delete' , $cat->id )}}" class="btn btn-danger">Delete</a>
                </td> 
            </tr>
            @endforeach
        </tbody>
      </table>


    
@endsection