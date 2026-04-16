<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;   // Added for better debugging

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

        // Build clean email body
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
            Mail::raw($emailBody, function ($message) use ($data) {
                $message->to('info@masafabodyfabricators.com')
                        ->replyTo($data['email'], $data['name'])
                        ->subject('Technical Quote Request: ' . $data['subject'])
                        // Highly recommended: Set a proper FROM address
                       ->from('info@masafabodyfabricators.com', 'Masafa Body Fabricators');
            });

            return back()->with('success', 'Your request has been received. Our technical team will get back to you shortly.');

        } catch (\Exception $e) {
            // Log the full error so you can check storage/logs/laravel.log
            Log::error('Contact Form Mail Failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'data'  => $data
            ]);

            return back()->withInput()
                         ->with('error', 'Sorry, we could not send your message right now. Please try again later.');
        }
    }
}