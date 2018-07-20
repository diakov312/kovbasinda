<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $nameUser;
    public $emailUser;
    public $subjectUser;
    public $textUser;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nameUser, $emailUser, $subjectUser, $textUser)
    {
        //
        $this->nameUser = $nameUser;
        $this->emailUser = $emailUser;
        $this->subjectUser = $subjectUser;
        $this->textUser = $textUser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contactform');
    }
}
