<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Validate the input
        $data = $request->validate([
            'name'    => 'required|string',
            'company' => 'nullable|string',
            'email'   => 'required|email',
            'phone'   => 'nullable|string',
            'subject' => 'required|string',
            'message' => 'required',
        ]);

        // 2. Send the Mail
        // We use Mail::raw for a simple text email, or Mail::to()->send() for a template
        Mail::raw($data['message'], function ($message) use ($data) {
            $message->to('info@masafabodyfabricators.com')
                    ->from($data['email'], $data['name'])
                    ->subject('Masafa Website: ' . $data['subject']);
        });

        // 3. Redirect back with a success message
        return back()->with('success', 'Thank you! Your message has been sent to the Masafa team.');
    }
}
