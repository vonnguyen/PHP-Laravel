<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailOrder extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $orderData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $dataOrder)
    {
        //
        $this->user = $user;
        $this->orderData = $dataOrder;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from vonnguyen041096@gmail.com')->view('mail.order');
    }
}
