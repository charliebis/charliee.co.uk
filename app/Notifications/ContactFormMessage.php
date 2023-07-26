<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Http\Requests\ContactFormRequest;

class ContactFormMessage extends Notification
{
    use Queueable;

    protected ContactFormRequest $message;
    protected array $inputValues;


    /**
     * Create a new notification instance.
     */
    public function __construct(ContactFormRequest $message)
    {
        $this->message     = $message;
        $this->inputValues = $this->message->getInputValues();
    }


    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }


    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $messageBody = explode(PHP_EOL, $this->inputValues['message']);

        return (new MailMessage)
            ->subject(config('recipient.name_to') . ", you have a new message from " . config('app.name') . "!")
            ->greeting('Contact form submission on ' . config('app.name'))
            ->from(config('recipient.email_from'), config('recipient.name_from'))
            ->replyTo($this->inputValues['email'], $this->inputValues['name'])
            ->line('Name: ' . $this->inputValues['name'])
            ->line('Email: ' . $this->inputValues['email'])
            ->lines(array_merge(['Message: ', ''], $messageBody));

        /*return (new MailMessage)
            ->subject(config('recipient.name_to') . ", you have a new message from " . config('app.name') . "!")
            //->greeting("Contact form submission on " . config('app.name'))
            //->salutation(" ")
            ->from(config('recipient.email_from'), config('recipient.name_from'))
            ->replyTo($this->inputValues['email'], $this->inputValues['name'])
            //->line($this->inputValues['message'])
            ->view(
                [
                    'emails.contact.html',
                    'emails.contact.plain'
                ],
                [
                    'email'        => $this->inputValues['email'],
                    'name'         => $this->inputValues['name'],
                    'message_body' => $this->inputValues['message']
                ]);*/
    }


    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
