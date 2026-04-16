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

        $emailBody = "New Quote Request from Masafa Website\n\n";
        $emailBody .= "Name:     {$data['name']}\n";
        $emailBody .= "Company:  " . ($data['company'] ?? 'N/A') . "\n";
        $emailBody .= "Email:    {$data['email']}\n";
        $emailBody .= "Phone:    {$data['phone']}\n";
        $emailBody .= "Location: " . ($data['location'] ?? 'N/A') . "\n\n";
        $emailBody .= "Subject:  {$data['subject']}\n\n";
        $emailBody .= "Message:\n";
        $emailBody .= $data['message'] . "\n\n";
        $emailBody .= "---\n";
        $emailBody .= "Sent from: https://masafabodyfabricators.com";

        try {
            Mail::raw($emailBody, function ($message) use ($data) {
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