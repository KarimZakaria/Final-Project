@extends('Admin.layout')

@section('title' , 'New Course')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--===============================================================================================-->	
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('asset/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{asset('asset/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('asset/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('asset/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{asset('asset/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('asset/css/main.css')}}">

</head>
<body>

    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url({{asset('asset/images/bg-01.jpg')}});">
					<span class="login100-form-title-1">
						Adding A new Course
					</span>
                </div>
                
                <form class="login100-form validate-form" method="POST" enctype="multipart/form-data" action="{{ route('Admin.Courses.store')}}">
                    @csrf
                    @include('Admin.inc.errors')
					<div class="wrap-input100 validate-input m-b-26"  data-validate="Course Name is required">
						<span class="label-input100">Course Name</span>
						<input class="input100" type="text" name="name" placeholder="Enter Course Name">
						<span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-26"  data-validate="Cat Name is required">
						<span class="label-input100">Cat Name</span>
                        <select class="input100" name="cat_id">
                            @foreach ($cats as $cat)                            
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
						<span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-26"  data-validate="Trainer Name is required">
						<span class="label-input100">T.Name</span>
                        <select class="input100" name="trainer_id">
                            @foreach ($trainers as $trainer)                            
                                <option value="{{$trainer->id}}">{{$trainer->name}}</option>
                            @endforeach
                        </select>
						<span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-26"  data-validate="Small Desc is required">
						<span class="label-input100">Small Desc</span>
						<input class="input100" type="text" name="small_desc" placeholder="Enter Small Desc">
						<span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-26"  data-validate="Description is required">
						<span class="label-input100">Description</span>
						<textarea rows="10" class="input100 border border-dark" type="text" name="desc" placeholder="Enter Description"></textarea>
						<span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-26"  data-validate="Course Name is required">
						<span class="label-input100">Price</span>
						<input class="input100" type="number" name="price" placeholder="Enter Price">
						<span class="focus-input100"></span>
                    </div>
                    
                    
                    
                    <div class="wrap-input100 validate-input m-b-26"  data-validate="Image is required">
						<span class="label-input100">Image</span>
						<input class="input100 form-control-file rounded" type="file" name="img" placeholder="Enter Your Image">
						<span class="focus-input100"></span>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Create
                            </button>
                            
                        </div>
                        <a class="btn btn-info login100-form-btn bg-info ml-3" href="{{route('Admin.Courses.index')}}">Back</a>
                    </div>
                </form>
			</div>
		</div>
    </div>
    
    <!--===============================================================================================-->
	<script src="{{asset('/asset/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('/asset/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('/asset/vendor/bootstrap/js/popper.js')}}"></script>
        <script src="{{asset('/asset/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('/asset/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('/asset/vendor/daterangepicker/moment.min.js')}}"></script>
        <script src="{{asset('/asset/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('/asset/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('/asset/js/main.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
    
@endsection