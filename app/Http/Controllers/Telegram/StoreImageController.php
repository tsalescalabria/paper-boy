<?php

namespace App\Http\Controllers\Telegram;

use App\Actions\Telegram\uploadPhotoAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\UploadPhotoRequest;

class StoreImageController extends Controller
{
    public function __invoke(UploadPhotoRequest $request)
    {
        return json_encode(["photoId" => (new uploadPhotoAction())->upload($request->file)]);
    }
}
