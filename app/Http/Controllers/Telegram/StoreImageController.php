<?php

namespace App\Http\Controllers\Telegram;

use App\Http\Controllers\Controller;
use App\Http\Jobs\UploadPhoto;
use App\Http\Requests\UploadPhotoRequest;

class StoreImageController extends Controller
{
    public function __invoke(UploadPhotoRequest $request)
    {

        if($request->hasFile('file')) {
            app('photo.send')->upload($request->file);
        }


        return json_encode(["file" => "uploaded"]);
    }
}
