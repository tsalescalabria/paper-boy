<?php

namespace App\Http\Jobs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadPhoto
{
    public static function upload(Request $request): string
    {

        if($request->hasFile("file")) {
            dd(Storage::cloud()->put("/rola", $request->file));
        }

        return $request->file('file')->hashName();
    }

    public static function getFiles(): array
    {
        return Storage::disk('s3')->allFiles('rola');
    }
}
