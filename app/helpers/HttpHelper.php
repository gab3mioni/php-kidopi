<?php

namespace App\Helpers;

class HttpHelper
{
    public static function get(string $url): array
    {
        $response = file_get_contents($url);
        return json_decode($response, true);
    }
}
