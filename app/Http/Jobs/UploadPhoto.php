<?php

namespace App\Http\Jobs;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UploadPhoto
{
    public function upload(Object $file): string
    {
        Storage::cloud()->put("/photos", $file);

        $model = new \App\Models\File();

        $model->uuid = $hash =  Hash::make('plain-text');
        $model->name = $file->hashName();

        $model->save();

        return $hash;
    }

    public function getFiles(): array
    {
        return Storage::cloud()->allFiles('photos');
    }
}
