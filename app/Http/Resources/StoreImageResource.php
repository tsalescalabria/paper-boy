<?php

namespace App\Http\Resources;

use App\Actions\Image\uploadPhotoAction;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreImageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "photo_id" => (new uploadPhotoAction())->upload($request->file),
        ];
    }
}
