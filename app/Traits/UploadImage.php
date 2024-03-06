<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait UploadImage
{
    /**
     * Handle the image upload.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $fieldName The form field name of the file upload.
     * @param string $storagePath The storage path within the public disk.
     * @return string|null The filename if uploaded, or null.
     */
    public function uploadImage(Request $request, $fieldName = 'image', $storagePath = 'uploads')
    {
        if ($request->hasFile($fieldName)) {
            $file = $request->file($fieldName);
            $filename = time() . '_' . $file->getClientOriginalName();
            Storage::disk('public')->putFileAs($storagePath, $file, $filename);
            return $storagePath . '/' . $filename;
        }

        return null;
    }
}
