<?php

namespace App\Mail;

use App\Models\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CustomerOrder extends Mailable
{
    use Queueable, SerializesModels;

    public $customer;

    /**
     * BookRoom constructor.
     *
     * @param  \App\Models\Customer  $customer
     */
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails._receive_info')
          ->with([
            'name' => $this->customer->name,
            'email' => $this->customer->email,
            'mobile' => $this->customer->mobile,
          ]);
    }
}
