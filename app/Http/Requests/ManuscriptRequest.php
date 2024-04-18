<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManuscriptRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'abstract' => 'required|string|max:1000',
            'file' => 'required|file|mimes:pdf,doc,docx',
            'authors' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A title is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'abstract.required' => 'An abstract is required.',
            'abstract.string' => 'The abstract must be a string.',
            'abstract.max' => 'The abstract may not be greater than 1000 characters.',
            'file.required' => 'You must provide a file.',
            'file.file' => 'The uploaded file must be a PDF file.',
            'file.mimes' => 'The file must be a document of type: .pdf, .doc, or .docx.',
            'authors.required' => 'Author information is required.',
            'authors.string' => 'Authors information must be a string.',
            'authors.max' => 'Authors information may not be greater than 255 characters.'
        ];
    }
}
