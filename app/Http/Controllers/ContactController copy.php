<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'full_name' => ['required', 'string', 'max:120'],
            'email' => [
                'required',
                'email:rfc,dns',
                'max:150',
                function ($attribute, $value, $fail) {
                    $domain = strtolower(substr(strrchr($value, "@"), 1));
                    if (in_array($domain, ['mailinator.com', '10minutemail.com'])) {
                        $fail('Please use a permanent email address.');
                    }
                },
            ],
            'phone'     => ['nullable', 'string', 'max:40'],
            'subject'   => ['required', 'string', 'max:150'],
            'message'   => ['required', 'string', 'max:5000'],
            'consent'   => ['accepted'],
            'website'   => ['nullable', 'max:0'], // honeypot
        ]);

        if ($request->filled('website')) {
            return back()->with('success', 'Thanks!')->withInput();
        }

        // Save to DB
        ContactMessage::create([
            ...$data,
            'consent'    => $request->boolean('consent'),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        // Send email (configure mail in .env)
        Mail::raw(
            "From: {$data['full_name']} <{$data['email']}>\nPhone: {$data['phone']}\n\n{$data['message']}",
            function ($message) use ($data) {
                $message->to('info@azonation.com', 'Azonation')
                    ->subject($data['subject'])
                    // ->subject('[Contact] ' . $data['subject'])
                    ->replyTo($data['email'], $data['full_name']);
            }
        );

        return back()->with('success', 'Thanks for your message — we’ll get back to you shortly.');
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
