<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\SaveCustomerRequest;
use App\Services\CustomerServices;
use App\Http\Controllers\Controller;

class ApiCustomerController extends Controller
{
    private $customerServices;

    public function __construct(CustomerServices $customerServices)
    {
        parent::__construct();

        $this->customerServices = $customerServices;
    }

    public function saveCustomer(SaveCustomerRequest $request)
    {
        try {
            $response = $this->customerServices->saveCustomer($request->all());

            return response()->json($response);
        } catch (\Exception $exception) {
            return response()->json($exception->getMessage(), 404);
        }
    }
}
