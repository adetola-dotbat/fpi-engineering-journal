<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VolumeRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|file|image|max:10240', // Max 10MB
        ];
    }
}
