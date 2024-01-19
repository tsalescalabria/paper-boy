<?php

namespace App\Trait;

use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

trait UploadMedia
{
    public function upload(Object $file): string
    {
        Storage::disk('s3')->put("/photos", $file);

        $model = new File();

        $model->uuid = $hash = Hash::make('plain-text');
        $model->name = $file->hashName();

        $model->save();

        return $hash;
    }
}
