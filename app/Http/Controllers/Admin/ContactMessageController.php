<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::latest()->paginate(10);

        return view('admin.messages.index', compact('messages'));
    }

    public function edit(ContactMessage $message)
    {
        return view('admin.messages.edit', compact('message'));
    }

    public function update(Request $request, ContactMessage $message)
    {
        $data = $request->validate([
            'subject' => ['required', 'string', 'max:150'],
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        $message->update($data);

        return redirect()
            ->route('admin.messages.index')
            ->with('success', 'Pesan berhasil diperbarui.');
    }

    public function destroy(ContactMessage $message)
    {
        $message->delete();

        return redirect()
            ->route('admin.messages.index')
            ->with('success', 'Pesan berhasil dihapus.');
    }
}

