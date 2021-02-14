<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Helpers\Eitaa;
use Illuminate\Http\Request;

class WebHookController extends Controller
{
    //
    public function index(Request $request)
    {
        $payload = $request->all();
        logger('Debug message' . json_encode($payload));

        $chat_id = 11111111111;

        $message = "";

        echo Eitaa::sendMessage($message, $chat_id);
    }
}
