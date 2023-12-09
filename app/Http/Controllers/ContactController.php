<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    //
    public function showForm()
    {
        return view('pages.contact');
    }

    public function insert(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name'    => 'required|string|max:40',
            'email'   => 'required|email|max:30',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Insert data into the 'contacts' table
        Contact::create([
            'name'    => $request->input('name'),
            'email'   => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        // Redirect back with success message
        return redirect()->route('contact.form')->with('success', 'Data has been added successfully!');
    }
}
