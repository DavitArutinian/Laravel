<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(ContactFormRequest $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|max:500',
        ]);

        return 'Thank you for your message!';
    }
}
