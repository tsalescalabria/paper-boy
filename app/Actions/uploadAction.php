<?php

namespace App\Actions;

class uploadAction
{
    public function __construct()
    {
    }

    public function upload(Object $file): string
    {
        return app('photo.send')->upload($file);
    }
}
