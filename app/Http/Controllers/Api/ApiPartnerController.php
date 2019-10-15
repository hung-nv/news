<?php

namespace App\Http\Controllers\Api;

use App\Services\PartnerServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ApiPartnerController extends Controller
{
    protected $partnerServices;

    public function __construct(PartnerServices $partnerServices)
    {
        parent::__construct();
        $this->partnerServices = $partnerServices;
    }

    public function deleteImage(Request $request)
    {
        try {
            $response = $this->partnerServices->deleteImageById($request->key);

            return response()->json($response);
        } catch (NotFoundHttpException $exception) {
            return response()->json($exception->getMessage(), $exception->getStatusCode());
        } catch (\Exception $exception) {
            return response()->json('Internal Server Error', 500);
        }
    }
}
