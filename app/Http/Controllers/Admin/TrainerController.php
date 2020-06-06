<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Trainer ; 
use Image ; 
use Illuminate\Support\Facades\Storage;

class TrainerController extends Controller
{
    public function index()
    {
        $data['trainers'] = Trainer::select('id'  , 'name' , 'phone' , 'spec' , 'img')->
        orderBy('id' , 'DESC')->get() ;

        return view('Admin.Trainer.index')->with($data);
    }

    public function create()
    {
        return view('Admin.Trainer.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' =>'required|string|max:30',
            'phone' =>'nullable|string|max:15',
            'spec' =>'required|string|max:30',
            'img' =>'required|image|mimes:jpg,png,jpeg'
        ]);
        
        $new_name = $data['img']->hashName(); //Hashing Image Name 

        Image::make($data['img'])->resize(50 , 50)->save(public_path('Uploads/Trainers/' .$new_name));
            
        $data['img'] = $new_name ;  // Only Save The Image Name Not All Properistes

        Trainer::create($data) ; 
        return redirect(route('Admin.Trainer.index'));
    }

    public function edit($id)
    {
        $data['trainer'] = Trainer::findOrFail($id);
        return view('Admin.Trainer.edit')->with($data) ; 
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' =>'required|string|max:30' , 
            'phone' =>'nullable|string|max:15',
            'spec' =>'required|string|max:30',
            'img' =>'nullable|image|mimes:jpg,png,jpeg' // use it a null value due to not updated the photo 
        ]);

        $old_name = Trainer::findOrFail($request->id)->img ; 
        if($request->hasFile('img'))
        {
            Storage::disk('Uploads')->delete('Trainers/'.$old_name);
            $new_name = $data['img']->hashName(); //Hashing Image Name 

            Image::make($data['img'])->resize(50 , 50)->save(public_path('Uploads/Trainers/' .$new_name));
            
            $data['img'] = $new_name ;
        }
        else
        {
            $data['img'] = $old_name ; 
        }

        Trainer::findOrFail($request->id)->update($data) ; 
        return redirect(route('Admin.Trainer.index'));
    }

    public function delete($id)
    {
        $old_name = Trainer::findOrFail($id)->img ; 
        Storage::disk('Uploads')->delete('Trainers/'.$old_name);
        Trainer::findOrFail($id)->delete();
        return back(); 
    }
}
