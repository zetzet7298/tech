<?php

namespace App\Http\Controllers;

use App\Mail\DataCreated;
use App\Models\Contact;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    //
    public function frontendStore(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            // 'message' => 'required|string',
        ]);
        $validated['message'] = $request->message;
        $contact = Contact::create($validated);
        // Mail::to($contact->email)->send(new DataCreated($contact));
        return redirect()->back()->with('success', 'Chúng tôi đã nhận được thông tin của bạn và sẽ liên hệ lại bạn trong thời gian sớm nhất!');
    }
}
