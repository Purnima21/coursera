<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;

class BaseController extends Controller
{
     protected function respondInJson(array $array, $httpCode = 200)
    {
        return Response::json($array, $httpCode);
    }

    protected function respondWithError($message = "Internal Server Error Occured", $httpCode = 404)
    {
        return $this->respondInJson(
            [
        	   'reasonCode'	=> config('constant.FAILURE_CODE'),
               'reasonText'    => config('constant.STATUS_ERROR'),
               'error'   		=> $message,
            ],
            $httpCode
        );
    }

    protected function respondWithSuccess($message = [], $httpCode = 200)
    {

        return $this->respondInJson([
            'reasonCode'	=> config('constant.SUCCESS_CODE'),
            'reasonText'    => config('constant.STATUS_SUCCESS'),
            'data'   		=> $message,
        ], $httpCode);
    }

    protected function respondWithException($message = "Too many requests", $httpCode = 429)
    {

        return $this->respondInJson([
            'reasonCode'    => config('constant.FAILURE_CODE'),
            'reasonText'    => config('constant.STATUS_ERROR'),
            'data'          => $message,
        ], $httpCode);
    }

    protected function respondWithValidationFail(array $message = [], $httpCode = 422)
    {
        return $this->respondInJson([
        	'reasonCode'	=> config('constant.FAILURE_CODE'),
            'reasonText'    => config('constant.STATUS_VALIDATION_FAIL'),
            'error'  	    => $message,
        ], $httpCode);
    }
}
