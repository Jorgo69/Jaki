<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurCoursesController extends Controller
{
    public function ourCourses()
    {
        return view('ourCourses');
    }
}
