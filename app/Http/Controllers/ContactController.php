<?php

namespace App\Http\Controllers;

use App\User;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('contact', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->title = $request->get('title');
        $contact->content = $request->get('content');
        $contact->namePerson = $request->get('name');
        $contact->mailPerson = $request->get('email');
        $contact->contactPerson = $request->get('userRight');
        $contact->save();

        return redirect('/');
    }

}
