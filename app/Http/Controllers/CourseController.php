<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $data = Course::all();

        return view('course.index', compact('data'))
    }
}

