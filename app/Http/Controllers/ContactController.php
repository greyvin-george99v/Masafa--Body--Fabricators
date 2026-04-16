<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Validate the input (Updated to match your new HTML names)
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'company'  => 'nullable|string|max:255',
            'email'    => 'required|email',
            'phone'    => 'required|string', // Changed to required as per your HTML
            'location' => 'nullable|string|max:255', // Added the new location field
            'subject'  => 'required|string|max:255',
            'message'  => 'required',
        ]);

        $emailBody = "New Technical Quote Request from Masafa Website:\n\n" .
                     "Full Name: {$data['name']}\n" .
                     "Company: " . ($data['company'] ?? 'Not provided') . "\n" .
                     "Location: " . ($data['location'] ?? 'Not provided') . "\n" .
                     "Email: {$data['email']}\n" .
                     "Phone: {$data['phone']}\n" .
                     "Subject: {$data['subject']}\n\n" .
                     "Message:\n{$data['message']}";

        // 3. Send the Mail
        Mail::raw($emailBody, function ($message) use ($data) {
            $message->to('info@masafabodyfabricators.com')
                    ->from(config('mail.from.address'), 'Masafa Website')
                    ->replyTo($data['email'], $data['name'])
                    ->subject('Technical Quote Request: ' . $data['subject']);
        });

        // 4. Redirect back with your success message
        return back()->with('success', 'Your request has been received. Our technical team will get back to you shortly.');
    }
}