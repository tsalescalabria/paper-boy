<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendMessageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "channel" => [
                "required",
                "integer"
            ],
            "message" => [
                "required",
                "string"
            ]

        ];
    }

    public function messages(): array
    {
        return [
            "message.string" => "message must be a string",
            "channel.integer" => "channel must be a integer"
        ];
    }
}
