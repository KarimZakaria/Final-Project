<?php

namespace App\Http\Controllers\Front;

use App\Cat ; 
use App\Course ; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function cat($id)
    {
        $data['cat'] = Cat::findOrFail($id); 
        $data['courses'] = Course::where('cat_id' , $id)->orderBy('id' , 'DESC')->paginate(6);

        return view('Front.Courses.cat')->with($data) ; 
    }

    public function show($id , $c_id)
    {
        $data['course'] = Course::findOrFail($c_id);

        return view('Front.Courses.show')->with($data) ; 
    }
}
