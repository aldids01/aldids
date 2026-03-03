<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;
    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        return $this->subject($this->data['subject'] ?? 'No Subject')
            ->to($this->data['email'])
            ->markdown('emails.contact-form', ['data' => $this->data])
            ->withSwiftMessage(function ($message) {
                $message->getHeaders()->addTextHeader('X-Priority', '1');
                $message->getHeaders()->addTextHeader('X-MSMail-Priority', 'High');
                $message->getHeaders()->addTextHeader('Importance', 'High');
            });
    }
}
