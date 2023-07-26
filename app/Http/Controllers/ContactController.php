<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Notifications\ContactFormMessage;
use App\Http\Requests\ContactFormRequest;
use App\Models\Recipient;


class ContactController extends Controller
{
    public function __construct()
    {

    }


    /**
     * Serves the contact form, upon GET request to the contact page
     *
     * @return View
     */
    public function index(): View
    {
        return view('pages.contact');
    }


    /**
     * @param ContactFormRequest $message
     * @param Recipient          $recipient
     *
     * @return View
     */
    public function sendMail(ContactFormRequest $message, Recipient $recipient): View
    {
        $recipient->notify(new ContactFormMessage($message));

        return view('pages.contact', [
            'success' => 'Thanks for your message! I will get back to you shortly!'
        ]);
    }
}

