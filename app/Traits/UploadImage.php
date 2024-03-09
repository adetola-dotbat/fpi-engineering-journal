<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait UploadImage
{
    public function uploadImage(?UploadedFile $file, $storagePath = 'uploads')
    {
        if ($file && $file->isValid()) {
            $filename = time() . '_' . $file->getClientOriginalName();
            Storage::disk('public')->putFileAs($storagePath, $file, $filename);
            return $filename;
        }
        return null;
    }
}
