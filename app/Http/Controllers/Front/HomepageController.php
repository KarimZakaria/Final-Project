<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SiteContent ; 
use App\Course ; 
use App\Student ; 
use App\Trainer ; 
use App\Test ;

class HomepageController extends Controller
{
    public function index()
        {
            $data['banner'] =SiteContent::select('content')->where('name' , 'banner')->first();
            $data['courses_content'] =SiteContent::select('content')->where('name' , 'courses')->first();
            $data['features'] =SiteContent::select('content')->where('name' , 'features')->first();
            $data['courses'] = Course::select('id', 'name', 'small_desc', 'cat_id', 'trainer_id', 'price', 'img')
            ->orderBy('id' , 'desc')
            ->paginate(9) ;

            $data['courses_count'] = Course::count();
            $data['trainers_count'] = Trainer::count();
            $data['students_count'] = Student::count();
            // dd($data['courses']); 

            $data['tests'] = Test::select('name', 'spec' , 'desc' , 'img')->get() ;

            return view('Front.index')->with($data);
        }
}
