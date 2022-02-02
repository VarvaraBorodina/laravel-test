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

    public $text;
    public $name;
    public $hello;

    public function __construct($text, $name, $hello)
    {
        $this->hello = $hello;
        $this->text = $text;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('test@mail.ru','Varvara')
            ->view('mails.bingo')
            ->with([
                'text' => $this->text,
                'name' => $this->name,
                'hello' => $this->hello,
            ]);
    }
}
