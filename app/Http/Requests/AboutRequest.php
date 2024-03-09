<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'id' => 'required',
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|file|image|max:10240', // Max 10MB
            'welcome_message' => 'nullable|string',
        ];
    }
}
