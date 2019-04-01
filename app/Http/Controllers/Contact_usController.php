<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Contact_us;

class Contact_usController extends Controller
{
	public function create()
	{
		$contact_us = new Contact_us();

		return view('contact_us.create', [
		'contact_us' => $contact_us,
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function store(Request $request)
	{
		$contact_us = new Contact_us;
		$contact_us->fill($request->all());
		$contact_us->save();

		return redirect()->route('contact_us.create');

	}

	public function index()
	{
		$contact_us = Contact_us::orderBy('id', 'asc')->get();

		return view('contact_us.index', [
			'contact_us' => $contact_us
		]);
	 }

	 public function show($id)
		{
				$contact_us = Contact_us::find($id);
				if(!$contact_us) throw new ModelNotFoundException;

				 return view('contact_us.show', [
				 'contact_us' => $contact_us
				 ]);
		 }
}
