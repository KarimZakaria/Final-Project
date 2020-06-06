<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student ; 
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    public function index()
    {
        $data['students'] = Student::select('id'  , 'name' , 'email' , 'spec')
        ->orderBy('id' , 'DESC')->paginate(10) ;
        
        return view('Admin.Students.index')->with($data);
    }

    public function create()
    {
        return view('Admin.Students.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' =>'required|string|max:30' , 
            'email' =>'required|email|max:30|unique:students' , 
            'spec' =>'nullable|string', 
        ]);

        Student::create($data) ; 
        return redirect(route('Admin.Students.index'));
    }

    public function edit($id)
    {
        $data['cat'] = Student::findOrFail($id);
        return view('Admin.Students.edit')->with($data) ; 
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' =>'required|string|max:30' , 
            'email' =>'required|email|max:30|unique:students' , 
            'spec' =>'nullable|string', 
        ]);

        Student::findOrFail($request->id)->update($data) ; 
        return redirect(route('Admin.Students.index'));
    }

    public function delete($id)
    {
        Student::findOrFail($id)->delete();
        return back(); 
    }

    public function showCourses($id)
    {
        $data['courses'] = Student::findOrFail($id)->courses ; 
        $data['student_id'] = $id; 
        return view('Admin.Students.showCourses')->with($data) ; 
    }

    public function approveCourse($id , $c_id)
    {
        DB::table('course_student')->where('student_id' , $id)->where('course_id' , $c_id)
        ->update([
            'status' => 'Approved' , 

        ]) ; 
        return back() ; 

    }

    public function rejectCourse($id , $c_id)
    {
        DB::table('course_student')->where('student_id' , $id)->where('course_id' , $c_id)
        ->update([
            'status' => 'Reject' , 

        ]) ; 
        return back() ; 

    }
}
