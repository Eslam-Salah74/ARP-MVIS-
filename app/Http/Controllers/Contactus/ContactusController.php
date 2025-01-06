<?php

namespace App\Http\Controllers\Contactus;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        // return $contact;
        return view('pages.ContactUs.contactus',compact('contact'));
    }
}
