<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
    	$this->request = $request;
    }

    public function create()
    {
    	return view('contact.create', ['title' => 'Contact Create']);
    }

    public function store()
    {
    	// dd($this->request);
    	if ($this->request->isMethod('post')) {
    		$rules = [
    			'name' => 'required|max:10',
    			'email' => 'required|email'
    		];

    		$this->validate($this->request, $rules);
    	}

    	return view('contact.show', ['contact_id' => 'contact_id', 'title' => 'Store Success']);
    }

    public function show($id)
    {
    	$contact = Contact::find($id);

    	return view('contact.show', ['contact' => 'contact', 'title' => 'Contact Show']);;
    }

    public function index()
    {
    	return view('contact.index', ['title' => 'Contact Index']);
    }
}
