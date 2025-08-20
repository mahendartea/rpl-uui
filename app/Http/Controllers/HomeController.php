<?php

namespace App\Http\Controllers;

use App\Models\StudyProgram;
use App\Models\GraduateCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $studyPrograms = StudyProgram::active()->get();
        $graduateCategories = GraduateCategory::all();

        return view('home.index', compact('studyPrograms', 'graduateCategories'));
    }

    public function about()
    {
        return view('home.about');
    }

    public function requirements()
    {
        return view('home.requirements');
    }

    public function contact()
    {
        return view('home.contact');
    }
}
