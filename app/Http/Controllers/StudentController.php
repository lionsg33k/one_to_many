<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function store(Request $request)
    {
        request()->validate([
            "name" => "required",
            "school_id" => "required"
        ]);

        Student::create([
            "name" => $request->name,
            "school_id" => $request->school_id
        ]);
        return back();
    }
}
