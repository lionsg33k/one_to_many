<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Student;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    //

    public function index()
    {
        $schools = School::all();
        $students = Student::all();
        return view("welcome", compact("schools" ,"students"));
    }


    public function store(Request $request)
    {
        request()->validate([
            "name" => "required"
        ]);

        School::create([
            "name" => $request->name
        ]);
        return back();
    }
}
