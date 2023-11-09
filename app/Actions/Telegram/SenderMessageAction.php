<?php

namespace App\Actions\Telegram;

use App\Http\Jobs\Telegram\Telegram;
use App\Models\Bot;
use App\Models\Channel;
use App\Models\Group;

class SenderMessageAction
{
    public function handle(string $message, int $channel_id)
    {
        $bot = Bot::first();
        $channel = Channel::find($channel_id);

        return match ($channel->name) {
            "Telegram" => (new Telegram())->sendMessage($bot->token,Group::first()->group_id, $message),
        };
    }
}
