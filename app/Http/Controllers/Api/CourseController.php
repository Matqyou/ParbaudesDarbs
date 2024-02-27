<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            "title"=> "required|max:255",
            "text" => "required",
            "banner_url" => "required|max:255",
            "participants" => "required|integer",
        ]);
        $course = Course::create($validated);
        return response()->json($course);
    }

    public function index(){
        return response()->json(Course::all());
    }
}
