<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Handle the incoming contact form request.
     */
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

        // 2. Format the email content for Masafa team
        $emailBody = "New Technical Quote Request from Masafa Website\n";
        $emailBody .= "------------------------------------------\n\n";
        $emailBody .= "Full Name:   {$data['name']}\n";
        $emailBody .= "Company:     " . ($data['company'] ?? 'N/A') . "\n";
        $emailBody .= "Location:    " . ($data['location'] ?? 'N/A') . "\n";
        $emailBody .= "Email:       {$data['email']}\n";
        $emailBody .= "Phone:       {$data['phone']}\n";
        $emailBody .= "Subject:     {$data['subject']}\n\n";
        $emailBody .= "Technical Requirements:\n";
        $emailBody .= "{$data['message']}\n\n";
        $emailBody .= "------------------------------------------\n";
        $emailBody .= "This message was sent via the Masafa Body Fabricators contact form.";

        try {
            // 3. Send the Mail
            Mail::raw($emailBody, function ($message) use ($data) {
                $message->to('info@masafabodyfabricators.com')
                        ->replyTo($data['email'], $data['name'])
                        ->subject('Technical Quote Request: ' . $data['subject']);
            });

            // 4. Redirect back with success message
            return back()->with('success', 'Your request has been received. Our technical team will get back to you shortly.');

        } catch (\Exception $e) {
            // If it fails, redirect back with the error message for debugging
            return back()->withInput()->with('error', 'Mail Error: ' . $e->getMessage());
        }
    }
}