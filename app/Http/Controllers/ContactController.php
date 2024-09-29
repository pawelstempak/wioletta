<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Http\Requests\PostRequest;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(): object
    {
        $contact = Contact::find(1);

        return view('frontend.contact', [
            'contact' => $contact,
            'phone' => $this->getPhone()
        ]);
    }

    public function showform(): object
    {
        $contact = Contact::find(1);

        return view('contactform', [
            'contact' => $contact
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $contact = Contact::find(1);
        $contact->siedziba = $request['siedziba'];
        $contact->telefon = $request['telefon'];
        $contact->email = $request['email'];
        $contact->save();

        return redirect('contactform');
    }

    public function send(PostRequest $request)
    {
        $validated = $request->validated();

        Mail::to(env('MAIL_CONTACT_FORM_EMAIL_ADDRESS'))->send(new ContactForm($validated['name'], $validated['email'], $validated['phone'], $validated['content']));

        $contact = Contact::find(1);
        return view('frontend.contact', [
            'contact' => $contact
        ]);
    }
}
