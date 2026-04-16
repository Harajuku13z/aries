<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => ['required', 'string', 'max:120'],
            'email'   => ['required', 'email', 'max:160'],
            'company' => ['nullable', 'string', 'max:160'],
            'subject' => ['required', 'string', 'max:160'],
            'message' => ['required', 'string', 'max:4000'],
        ]);

        // Implémentation Mailable à brancher en production.
        // Mail::to('aries@aries-investissements.com')->send(new ContactReceived($data));
        logger('contact.received', $data);

        return back()->with('status', 'Votre message a bien été transmis. Nous vous recontactons sous 48 h.');
    }
}
