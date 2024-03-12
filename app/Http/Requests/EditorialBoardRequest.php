<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditorialBoardRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'fullname' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'designation_id' => 'required|exists:designations,id',
            'image' => 'nullable|file|image|max:10240', // Max 10MB
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'position' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
        ];
    }
}
