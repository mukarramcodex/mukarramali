<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function index() 
    {
        $project = Project::latest()->get();
        return view('projects.index', compact('projects'));
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        return view('projects.show', compact('project'));
    }
}
