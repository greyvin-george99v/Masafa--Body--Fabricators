<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Basic Validation
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        try {
            // 2. Standard Mail Send (No fancy bells or whistles)
            Mail::send([], [], function ($message) use ($data) {
                $message->to('info@masafabodyfabricators.com')
                        ->from('info@masafabodyfabricators.com', 'Masafa Website')
                        ->replyTo($data['email'], $data['name'])
                        ->subject('New Inquiry: ' . $data['subject'])
                        // Plain text body - hardest for spam filters to trip on
                        ->setBody(
                            "New message from: " . $data['name'] . "\n" .
                            "Email: " . $data['email'] . "\n" .
                            "Phone: " . $data['phone'] . "\n\n" .
                            "Message:\n" . $data['message'],
                            'text/plain'
                        );
            });

            return back()->with('success', 'Thank you. Your message has been sent.');

        } catch (\Exception $e) {
            // If it fails, it will show the ACTUAL server error on your screen
            return back()->withInput()->with('error', 'Mail Error: ' . $e->getMessage());
        }
    }
}