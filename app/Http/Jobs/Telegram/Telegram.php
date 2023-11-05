<?php

namespace App\Http\Jobs\Telegram;

use App\Http\Jobs\Sender;

class Telegram extends Sender
{
    public function sendMessage(String $botToken,String $chat_id, String $text): bool
    {
        return $this->http("https://api.telegram.org/bot{$botToken}/sendMessage", [
            "chat_id" => $chat_id,
            "text" => $text,
        ])?->collect()["ok"];
    }

}
