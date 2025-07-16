<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() 
    {
        return view('pages.home');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function sendConctact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'website' => 'required',
            'message' => 'required',
        ]);

        // Send email logic or store to DB
        // Mail::to('you@example.com')->send(new ContactFormMail($validated));

        return back()->with('Success', 'Message sent Successfully!');
    }
}
