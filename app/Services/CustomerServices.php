<?php

namespace App\Services;


use App\Mail\CustomerOrder;
use App\Models\Customer;
use App\Models\Option;
use Illuminate\Support\Facades\Mail;

class CustomerServices
{

    /**
     * Save customer information.
     * @param array $dataRequest
     * @return Customer|\Illuminate\Database\Eloquent\Model
     */
    public function saveCustomer($dataRequest)
    {
        if ($customer = Customer::create($dataRequest)) {

            $email = Option::where('key', 'email')->first();

            if ($email) {
                Mail::to($email->value)
                  ->send(new CustomerOrder($customer));
            }
        }

        return response()->json(['message' => 'Successful']);
    }
}