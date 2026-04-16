<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Validate ALL fillables
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        try {
            // 2. Send email with ALL fillables in the body
            Mail::send([], [], function ($message) use ($data) {
                $message->to('info@masafabodyfabricators.com')
                        ->from(config('mail.from.address'), config('mail.from.name'))
                        ->replyTo($data['email'], $data['name'])
                        ->subject('Technical Inquiry: ' . $data['subject'])
                        ->setBody(
                            "NEW TECHNICAL QUOTE REQUEST\n" .
                            "----------------------------\n" .
                            "Full Name: " . $data['name'] . "\n" .
                            "Company:   " . ($data['company'] ?? 'Not Provided') . "\n" .
                            "Email:     " . $data['email'] . "\n" .
                            "Phone:     " . $data['phone'] . "\n" .
                            "Subject:   " . $data['subject'] . "\n\n" .
                            "MESSAGE:\n" . $data['message'],
                            'text/plain'
                        );
            });

            return back()->with('success', 'Thank you! Your technical request has been sent.');

        } catch (\Exception $e) {
            // This will catch SMTP or Spam errors and show them in your red alert box
            return back()->withInput()->with('error', 'Mail Error: ' . $e->getMessage());
        }
    }
}