<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuickLinkRequest extends BaseRequest
{

    public function rules(): array
    {
        return [
            'url' => 'required|url|max:255',
            'title' => 'required|string|max:255',
        ];
    }
}
