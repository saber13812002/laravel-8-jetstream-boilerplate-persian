<?php

namespace App\Helpers;

class Eitaa
{
    function __construct()
    {
    }

    public static function sendMessage($message, $chat_id)
    {
        $token = env("EITAA_BOT_TOKEN");
        $eitaaBaseUrl = env("EITAA_BOT_BASE_URL");

        $url = $eitaaBaseUrl . $token . '/sendMessage';
        $request = curl_init($url);

        $request = curl_init($url);
        curl_setopt($request, CURLOPT_POST, true);
        curl_setopt($request, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt(
            $request,
            CURLOPT_POSTFIELDS,
            array(
                'chat_id' => $chat_id,
                'text' => $message,
                'date' => time(),
            )
        );
        logger('Debug message :' . $chat_id . ' :' . $url);

        // output the response
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
        return curl_exec($request);
    }
}
