<?php

namespace App\Http\Jobs;

use Http;
use Illuminate\Support\Collection;

abstract class Sender
{
    abstract public function sendMessage(String $botToken, String $chat_id, String $text): bool;

    /**
     * Summary of http
     * @param string $url
     * @param array $data
     * @return bool
     */
    protected function http(String $url, array $data): Collection
    {
        $response = Http::post($url, $data);

        return $response?->collect();
    }
}
