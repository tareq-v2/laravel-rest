<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function sendResponse($result, $message){
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];

        // return $response()->json($response, 200);
        return response()->json($response, 200);
    }

    /**
     * return error message
     * @param string $error
     */

     public function sendError($error, $errorMessages = [], $code = 404){
        $response = [
            'success' => true,
            'message' => $error,
        ];

        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);

     }

}
