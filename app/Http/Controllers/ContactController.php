<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request) {
            $data = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'subject' => 'required|string',
                'message' => 'required|string|min:20', // Minimum 20 chars to avoid spam flags
            ]);

            try {
                \Illuminate\Support\Facades\Mail::html("
                    <h3>New Technical Inquiry</h3>
                    <p><strong>Name:</strong> {$data['name']}</p>
                    <p><strong>Message:</strong><br>{$data['message']}</p>
                ", function ($message) use ($data) {
                    $message->to('info@masafabodyfabricators.com')
                            ->replyTo($data['email'], $data['name'])
                            ->subject('Masafa Lead: ' . $data['subject']);
                    
                    // This header helps bypass "High Probability Spam" filters on cPanel
                    $message->getHeaders()->addTextHeader('X-Auto-Response-Suppress', 'OOF, AutoReply');
                });

                return back()->with('success', 'Quote request sent successfully.');
            } catch (\Exception $e) {
                return back()->withInput()->with('error', 'Mail Server Error: ' . $e->getMessage());
            }
        }
}