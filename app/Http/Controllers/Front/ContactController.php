<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Settings ; 

class ContactController extends Controller
{
    public function index()
    {
        $data['settings'] = Settings::first();
        return view('Front.Contact.index')->with($data) ;
    }
}
