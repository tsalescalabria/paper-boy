<?php


return [
    "core" => "https://api.telegram.org/bot" . env("TELEGRAM_BOT_TOKEN") . "/getUpdates",
    "sendmessage" => "/sendMessage",
];
