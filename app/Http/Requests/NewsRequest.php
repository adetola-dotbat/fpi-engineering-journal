<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'caption' => 'nullable|string|max:255',
            'image' => 'nullable|file|image|max:10240',
            'url' => 'nullable|string|max:255',
        ];
    }
}
