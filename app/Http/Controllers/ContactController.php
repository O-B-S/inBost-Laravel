<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function create(Request $request) {
        return view('/contact');
    }
    // Store Contact Form data
    public function store(Request $request) {
        // Form validation
        $this->validate($request, [
            'name' => 'required|min:2',
            'forename' => 'required|min:3',
            'email' => 'required|email',
            'contact' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'
         ]);
        //  Store data in database
        Contact::create($request->all());
        // 
        return back()->with('success', 'Message envoyé.');
    }
}
