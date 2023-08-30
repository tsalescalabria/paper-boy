<?php

namespace App\Http\Controllers\Telegram;

use App\Http\Controllers\Controller;
use App\Http\Jobs\UploadPhoto;
use Illuminate\Http\Request;

class StoreImageController extends Controller
{
    public function __invoke(Request $request)
    {
        $fileName = UploadPhoto::upload($request);

        dd(UploadPhoto::getFiles());

        return json_encode(["file" => $fileName]);
    }
}
