<?php

namespace App\Services\Telegram;

use App\Services\Sender;

class Telegram extends Sender
{
    private String $token;
    public function setToken(String $token)
    {
        $this->token = $token;
    }
    public function sendMessage(String $chat_id, String $text): bool
    {
        return $this->http(config("telegram.sendMessage"), [
            "chat_id" => $chat_id,
            "text" => $text,
        ])?->collect()["ok"];
    }

}
