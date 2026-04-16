<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            'message'  => 'required|string|min:10',
        ]);

        $htmlContent = "
            <div style='font-family: Arial, sans-serif; color: #333;'>
                <h2 style='color: #800000;'>Technical Quote Request</h2>
                <p>A new inquiry has been submitted via the Masafa website.</p>
                <table style='width: 100%; border-collapse: collapse;'>
                    <tr style='background: #f4f4f4;'><td style='padding: 10px; border: 1px solid #ddd;'><strong>Name:</strong></td><td style='padding: 10px; border: 1px solid #ddd;'>{$data['name']}</td></tr>
                    <tr><td style='padding: 10px; border: 1px solid #ddd;'><strong>Company:</strong></td><td style='padding: 10px; border: 1px solid #ddd;'>" . ($data['company'] ?? 'N/A') . "</td></tr>
                    <tr style='background: #f4f4f4;'><td style='padding: 10px; border: 1px solid #ddd;'><strong>Location:</strong></td><td style='padding: 10px; border: 1px solid #ddd;'>" . ($data['location'] ?? 'N/A') . "</td></tr>
                    <tr><td style='padding: 10px; border: 1px solid #ddd;'><strong>Phone:</strong></td><td style='padding: 10px; border: 1px solid #ddd;'>{$data['phone']}</td></tr>
                    <tr style='background: #f4f4f4;'><td style='padding: 10px; border: 1px solid #ddd;'><strong>Subject:</strong></td><td style='padding: 10px; border: 1px solid #ddd;'>{$data['subject']}</td></tr>
                </table>
                <h4 style='margin-top: 20px;'>Technical Requirements:</h4>
                <div style='padding: 15px; border: 1px solid #eee; background: #fafafa;'>
                    " . nl2br(e($data['message'])) . "
                </div>
                <p style='font-size: 11px; color: #777; margin-top: 25px;'>Sent from Masafa Body Fabricators Web System.</p>
            </div>
        ";

        try {
            Mail::html($htmlContent, function ($message) use ($data) {
                $message->to('info@masafabodyfabricators.com')
                        ->replyTo($data['email'], $data['name'])
                        ->subject('New Quote Request: ' . $data['subject']);
            });

            return back()->with('success', 'Your request has been sent successfully. Our team will review your requirements and respond shortly.');

        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Mail Error: ' . $e->getMessage());
        }
    }
}