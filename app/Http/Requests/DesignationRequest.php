<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DesignationRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'designation' => 'required|string'
        ];
    }
}
