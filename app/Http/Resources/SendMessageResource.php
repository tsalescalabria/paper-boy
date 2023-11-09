<?php

namespace App\Http\Resources;

use App\Actions\Telegram\SenderMessageAction;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SendMessageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "data" => (new SenderMessageAction())->handle($this->message, $this->channel),
        ];
    }
}
