<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Course ; 
use Image ; 
use App\Trainer ; 
use App\Cat ; 

class CourseController extends Controller
{
    public function index()
    {
        $data['courses'] = Course::select('id'  , 'name' , 'price' , 'small_desc' , 'img')->
        orderBy('id' , 'DESC')->paginate(10);

        return view('Admin.Courses.index')->with($data);
    }

    public function create()
    {
        $data['cats'] = Cat::select('id' , 'name')->get(); 
        $data['trainers'] = Trainer::select('id' , 'name')->get(); 
        return view('Admin.Courses.create')->with($data );
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' =>'required|string|max:30',
            'price' => 'required|integer' , 
            'small_desc' => 'required|string|max:191' , 
            'desc' => 'required|string' , 
            'img' =>'nullable|image|mimes:jpg,png,jpeg',
            'cat_id' => 'required|exists:cats,id',
            'trainer_id' => 'required|exists:trainers,id'
        ]);
        
        $new_name = $data['img']->hashName(); //Hashing Image Name 

        Image::make($data['img'])->resize(970 , 520)->save(public_path('Uploads/Courses/' .$new_name));
            
        $data['img'] = $new_name ;  // Only Save The Image Name Not All Properistes

        Course::create($data) ; 
        return redirect(route('Admin.Courses.index'));
    }

    public function edit($id)
    {
        $data['cats'] = Cat::select('id' , 'name')->get(); 
        $data['trainers'] = Trainer::select('id' , 'name')->get();
        
        $data['course'] = Course::findOrFail($id);
        return view('Admin.Courses.edit')->with($data); 
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' =>'required|string|max:30',
            'price' => 'required|integer' , 
            'small_desc' => 'required|string|max:191' , 
            'desc' => 'required|string' , 
            'img' =>'nullable|image|mimes:jpg,png,jpeg',
            'cat_id' => 'required|exists:cats,id',
            'trainer_id' => 'required|exists:trainers,id'
        ]);

        $old_name = Course::findOrFail($request->id)->img ; 
        if($request->hasFile('img'))
        {
            Storage::disk('Uploads')->delete('Courses/'.$old_name);
            $new_name = $data['img']->hashName(); //Hashing Image Name 

            Image::make($data['img'])->resize(970 , 520)->save(public_path('Uploads/Courses/' .$new_name));
            
            $data['img'] = $new_name ;
        }
        else
        {
            $data['img'] = $old_name ; 
        }
        
        Course::findOrFail($request->id)->update($data) ; 
        return redirect(route('Admin.Courses.index'));
    }

    public function delete($id)
    {
        $old_name = Course::findOrFail($id)->img ; 
        Storage::disk('Uploads')->delete('Courses/'.$old_name);
        Course::findOrFail($id)->delete();
        return back(); 
    }
}
