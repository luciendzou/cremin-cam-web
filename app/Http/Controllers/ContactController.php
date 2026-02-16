<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $data = $request->validate([
            'destination' => 'required|in:general,yaounde,douala,garoua',
            'name'    => 'required|string|max:120',
            'email'   => 'required|email|max:120',
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string|max:2000',
        ]);

        $map = [
            'general' => 'info.cremincam@cremincam.com',
            'yaounde' => 'info.cremincamyaounde@cremincam.com',
            'douala'  => 'info.cremincamdouala@cremincam.com',
            'garoua'  => 'info.cremincamgaroua@cremincam.com',
        ];

        $to = $map[$data['destination']] ?? (config('mail.from.address') ?: env('MAIL_FROM_ADDRESS'));

        try {
            if ($to) {
                Mail::to($to)->send(new ContactFormMail($data));
            } else {
                Log::warning('Contact form: no recipient configured', $data);
                return back()->withErrors('Aucun destinataire configuré.');
            }
        } catch (\Throwable $e) {
            Log::error('Contact form mail error: '.$e->getMessage(), ['data' => $data]);
            return back()->withErrors('Erreur lors de l’envoi du message. Veuillez réessayer ultérieurement.');
        }

        return back()->with('success', 'Merci — votre message a été envoyé.');
    }
}