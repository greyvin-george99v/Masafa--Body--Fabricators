<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'company'  => 'nullable|string|max:255',
            'email'    => 'required|email',
            'phone'    => 'required|string',
            'location' => 'nullable|string|max:255',
            'subject'  => 'required|string|max:255',
            'message'  => 'required|string',
        ]);

        $body = "New Quote Request from Masafa Website\n\n";
        $body .= "Name:     " . $data['name'] . "\n";
        $body .= "Company:  " . ($data['company'] ?? 'N/A') . "\n";
        $body .= "Email:    " . $data['email'] . "\n";
        $body .= "Phone:    " . $data['phone'] . "\n";
        $body .= "Location: " . ($data['location'] ?? 'N/A') . "\n\n";
        $body .= "Subject:  " . $data['subject'] . "\n\n";
        $body .= "Message:\n" . $data['message'] . "\n\n";
        $body .= "---\nSent from: https://masafabodyfabricators.com";

        try {
            Mail::raw($body, function ($message) use ($data) {
                $message->to('info@masafabodyfabricators.com')
                        ->replyTo($data['email'], $data['name'])
                        ->from('info@masafabodyfabricators.com', 'Masafa Body Fabricators')
                        ->subject('New Quote Request: ' . $data['subject']);
            });

            return back()->with('success', 'Thank you! Your quote request has been sent successfully.');

        } catch (\Exception $e) {
            Log::error('Contact Form Error: ' . $e->getMessage());
            
            return back()->withInput()
                         ->with('error', 'Mail Error: ' . $e->getMessage());
        }
    }
}