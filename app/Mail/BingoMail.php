<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BingoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $balance;
    public $text;

    public function __construct($balance)
    {
        $this->balance = $balance;
        $this->text = 'hello world';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('test@mail.ru','gjjgjg')
            ->text('mails.bingo')
            ->with([
                'message2' => 'Message text',
            ])
            ->attach('https://memepedia.ru/wp-content/uploads/2019/01/hamster.jpg');
      //  return $this->view('view.name');
    }
}