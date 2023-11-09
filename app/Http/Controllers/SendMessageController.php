<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMessageRequest;
use App\Http\Resources\SendMessageResource;

class SendMessageController extends Controller
{
    public function __invoke(SendMessageRequest $request)
    {
        return (new SendMessageResource($request));
    }
}
