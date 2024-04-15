<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaperTemplateRequest extends BaseRequest
{

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'nullable|file',
        ];
    }
}
