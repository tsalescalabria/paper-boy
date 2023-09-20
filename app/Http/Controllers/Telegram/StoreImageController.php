<?php


namespace App\Http\Controllers\Telegram;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadPhotoRequest;
use App\Http\Resources\StoreImageResource;

class StoreImageController extends Controller
{
    public function __invoke(UploadPhotoRequest $request)
    {
        return (new StoreImageResource($request));
    }
}
