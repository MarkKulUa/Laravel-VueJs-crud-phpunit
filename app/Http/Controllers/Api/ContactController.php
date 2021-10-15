<?php

namespace App\Http\Controllers\Api;

use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate();

        return view('contacts.index', compact('contacts'));
    }
}
