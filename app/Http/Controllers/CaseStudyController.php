<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function index()
    {
        $studies = CaseStudy::latest()->get();
        return view('case-studies.index', compact('studies'));
    }

    public function show($slug)
    {
        $study = CaseStudy::where('slug', $slug)->firstOrFail();
        return view('case-studies.show', compact('study'));
    }
}
