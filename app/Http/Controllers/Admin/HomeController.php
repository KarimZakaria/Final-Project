<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student ; 

class HomeController extends Controller
{
    public function index()
    {
        $data['students'] = Student::all()->count() ; 
        return view('Admin.index')->with($data);
    }
}
