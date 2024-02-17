<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Recipient;
use App\Notifications\ContactFormMessage;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function __construct()
    {
    }

    /**
     * Serves the contact form, upon GET request to the contact page
     */
    public function index(): View
    {
        return view('pages.contact');
    }

    public function sendMail(ContactFormRequest $message, Recipient $recipient): View
    {
        //  Honeypot check - subject is a hidden field and not supposed to be filled in by a real person.
        //  If there is a value in subject, assume it's a spam-bot
        $subject = $message->getInputValues()['subject'];
        if (empty($subject)) {
            $recipient->notify(new ContactFormMessage($message));
        }

        return view('pages.contact', [
            'success' => 'Thanks for your message! I will get back to you shortly!',
        ]);
    }
}
