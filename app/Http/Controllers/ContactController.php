<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $contacts = Contact::all();
      return view('contacts.index', [ 'contacts' => $contacts, ]);
    }

    public function store(Request $request)
    {
      $contacts = new Contact;
      $contacts->name = $request->input('name');
      $contacts->email = $request->input('email');
      $contacts->phone = $request->input('phone');
      $contacts->save();
      return redirect()->route('contacts.index');
    }
}
