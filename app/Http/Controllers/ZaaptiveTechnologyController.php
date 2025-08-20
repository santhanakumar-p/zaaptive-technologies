<?php

namespace App\Http\Controllers;

use App\Models\Career;

class ZaaptiveTechnologyController extends Controller
{
    public function index()
    {
        return view('zaaptive-technologies.index');
    }

    public function career()
    {
        $engineerings = Career::where('category', 'engineering')->select('id', 'category', 'position', 'location', 'description', 'experience', 'skills', 'salary', 'status')->get();
        $designs = Career::where('category', 'design')->select('id', 'category', 'position', 'location', 'description', 'experience', 'skills', 'salary', 'status')->get();
        $operations = Career::where('category', 'operation')->select('id', 'category', 'position', 'location', 'description', 'experience', 'skills', 'salary', 'status')->get();

        return view('zaaptive-technologies.career', compact('engineerings', 'designs', 'operations'));
    }

    public function careerDetail()
    {
        return view('zaaptive-technologies.career-details');
    }
}
