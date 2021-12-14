<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;

class PromoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $customer;

    public function __construct($customer, $promo)
    {
        $this->customer = $customer;
        $this->promo = $promo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.promo')
                    ->with(
                        [
                            'customer' => $this->customer,
                            'promo' => $this->promo,
                            'tanggal' => Carbon::now()->format('d F Y H:i'),
                        ]
                    );
    }
}
