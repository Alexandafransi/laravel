<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

// use App\Mail\SendMail;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;//for making dynamic email body
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('alexismalecha@gmail.com')->subject('New Customer Message')
        ->view('dynamic_email_template')->with('data', $this->data);

    }

}
