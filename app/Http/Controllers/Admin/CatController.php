<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cat;
class CatController extends Controller
{
    public function index()
    {
        $data['cats'] = Cat::select('id'  , 'name')->orderBy('id' , 'DESC')->get() ;
        return view('Admin.Cat.index')->with($data);
    }

    public function create()
    {
        return view('Admin.Cat.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' =>'required|string|max:30' , 
        ]);

        Cat::create($data); 
        return redirect(route('Admin.Cat.index'));
    }

    public function edit($id)
    {
        $data['cat'] = Cat::findOrFail($id);
        return view('Admin.Cat.edit')->with($data) ; 
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' =>'required|string|max:30' , 
        ]);

        Cat::findOrFail($request->id)->update($data); 
        $request->session()->flash('success' , 'Category Updating Successffully, Refresh Page');  
        return redirect(route('Admin.Cat.index'));
    }

    public function delete($id)
    {
        Cat::findOrFail($id)->delete();
        session()->flash('success' , 'Deleting Category Successffull, Refresh Page');  
        return back(); 
    }
}
