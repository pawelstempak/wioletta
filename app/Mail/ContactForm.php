<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    private string $sender_email;
    private string $sender_name;

    /**
     * Create a new message instance.
     */
    public function __construct(public string $name, public string $email, public string $phone, public string $content)
    {
        $this->sender_email = $email;
        $this->sender_name = $name;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->sender_email, $this->sender_name),
            subject: 'Formularz kontaktowy Timmspawtech.pl',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            html: 'emails.contact-form',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
