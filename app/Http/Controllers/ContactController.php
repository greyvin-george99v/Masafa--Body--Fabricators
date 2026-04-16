<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

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

        // Improved email body - more natural and less spammy
        $emailBody = "Dear Masafa Team,\n\n";
        $emailBody .= "You have received a new Technical Quote Request from the website.\n\n";
        $emailBody .= "==========================================\n";
        $emailBody .= "Full Name:     {$data['name']}\n";
        $emailBody .= "Company:       " . ($data['company'] ?? 'N/A') . "\n";
        $emailBody .= "Location:      " . ($data['location'] ?? 'N/A') . "\n";
        $emailBody .= "Email:         {$data['email']}\n";
        $emailBody .= "Phone:         {$data['phone']}\n";
        $emailBody .= "Subject:       {$data['subject']}\n\n";
        $emailBody .= "Technical Requirements / Message:\n";
        $emailBody .= "------------------------------------------\n";
        $emailBody .= "{$data['message']}\n\n";
        $emailBody .= "==========================================\n";
        $emailBody .= "This message was sent via the Masafa Body Fabricators Contact Form.\n";
        $emailBody .= "Website: https://masafabodyfabricators.com\n";
        $emailBody .= "Sent on: " . now()->format('d M Y H:i') . "\n";

        try {
            Mail::raw($emailBody, function ($message) use ($data) {
                $message->to('info@masafabodyfabricators.com')
                        ->replyTo($data['email'], $data['name'])
                        ->from('info@masafabodyfabricators.com', 'Masafa Body Fabricators')
                        ->subject('Technical Quote Request: ' . $data['subject']);
            });

            return back()->with('success', 'Your request has been received. Our technical team will get back to you shortly.');

        } catch (\Exception $e) {
            Log::error('Contact Form Mail Failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'data'  => $data
            ]);

            // Show real error for debugging (you can remove this line later)
            return back()->withInput()
                         ->with('error', 'Mail Error: ' . $e->getMessage());
        }
    }
}