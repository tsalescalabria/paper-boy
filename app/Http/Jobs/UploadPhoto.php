<?php

namespace App\Http\Jobs;

use Illuminate\Support\Facades\Storage;

class UploadPhoto
{
    public function upload(Object $file): string
    {
        Storage::cloud()->put("/photos", $file);

        return $file->hashName();
    }

    public function getFiles(): array
    {
        return Storage::cloud()->allFiles('photos');
    }
}
