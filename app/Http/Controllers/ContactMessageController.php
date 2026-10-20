<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactMessageController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'subject' => ['required', 'string', 'max:150'],
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        $data['received_at'] = now()->toIso8601String();
        Storage::disk('local')->append('contact-messages.jsonl', json_encode($data, JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR));

        return back()->with('success', 'Terima kasih! Pesan Anda berhasil dikirim.');
    }
}
