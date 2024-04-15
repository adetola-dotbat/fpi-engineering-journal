<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuidelineRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ];
    }
}
