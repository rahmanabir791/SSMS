<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home ()
    {
        return view('front.home.home', [
            'courses'   => Course::latest()->get(),
        ]);
    }
    public function courseDetails ($id)
    {
        return view('front.course.details', [
            'course'    => Course::find($id)
        ]);
    }
}
