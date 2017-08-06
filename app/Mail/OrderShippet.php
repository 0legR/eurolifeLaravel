<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShippet extends Mailable
{
    use Queueable, SerializesModels;
    protected $order = 123123123;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.order.shipped')->with([
                'name' -> $this->order->name,
                'price' -> $this->order->price
            ])->attach('img/911.jpg', [
                'as' -> '911.jpg',
                'mime' -> 'application/img'
            ]);
    }
}
