<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'volume_id' => 'required|exists:volumes,id',
            'title' => 'required|string|max:255',
            'abstract' => 'nullable|string|max:1000',
            'file' => 'nullable|file|image',
            'pages' => 'nullable|string|max:255',
            'author' => 'nullable|string|max:255',
            'publish_date' => 'nullable|string|max:255',
            'popularity' => 'nullable|string|max:255',
        ];
    }
}
