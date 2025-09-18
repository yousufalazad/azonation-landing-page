<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


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
            'phone'   => ['nullable', 'string', 'max:40'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:5000'],
            'consent' => ['accepted'],
            'website' => ['nullable', 'max:0'], // honeypot
        ]);

        // Honeypot (silent success to bots)
        if ($request->filled('website')) {
            return back()->with('success', 'Thanks!')->withInput();
        }

        // Persist
        $record = ContactMessage::create([
            ...$data,
            'consent'    => $request->boolean('consent'),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        // A simple reference for both emails (optional)
        $ref = 'AZTN-' . now()->format('Ymd') . '-' . str_pad((string)$record->id, 5, '0', STR_PAD_LEFT);

        // --- Admin notification (to your team) ---
        try {
            Mail::html(
                view('emails.contact.admin', [
                    'ref'   => $ref,
                    'data'  => $data,
                    'record'=> $record,
                ])->render(),
                function ($message) use ($data, $ref) {
                    $message->to('info@azonation.com', 'Azonation')
                            ->subject('[Contact '.$ref.'] '.$data['subject'])
                            ->replyTo($data['email'], $data['full_name']);
                }
            );
        } catch (\Throwable $e) {
            Log::error('Contact admin email failed', ['error' => $e->getMessage()]);
            // Do not reveal email errors to the user; continue gracefully.
        }

        // --- User confirmation (copy to the sender) ---
        try {
            Mail::html(
                view('emails.contact.user', [
                    'ref'   => $ref,
                    'data'  => $data,
                ])->render(),
                function ($message) use ($data) {
                    $message->to($data['email'], $data['full_name'])
                            ->subject('We received your message — Azonation')
                            ->from('info@azonation.com', 'Azonation Support')
                            ->replyTo('info@azonation.com', 'Azonation Support');
                }
            );
        } catch (\Throwable $e) {
            Log::warning('Contact user confirmation email failed', ['error' => $e->getMessage()]);
        }

        return back()->with('success', 'Thanks for your message — we’ve emailed you a copy and will get back shortly. Ref: '.$ref);
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
