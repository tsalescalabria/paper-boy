<?php

namespace App\Services;

use App\Trait\UploadMedia;
use Illuminate\Support\Facades\Storage;

class UploadPhoto
{
    use UploadMedia;

    public function getFiles(): array
    {
        return Storage::cloud()->allFiles('photos');
    }
}
