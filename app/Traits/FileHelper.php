<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait FileHelper
{
    /**
     * Handle the file upload.
     *
     * @param Request $request The incoming request instance.
     * @param string $fieldName The name of the form input field.
     * @param string $storagePath The path within the storage disk.
     * @return string|null The filename of the uploaded file or null if no file was uploaded.
     */
    public function uploadFile(UploadedFile $file, $path)
    {
        $filePath = $file->store($path, 'public');
        return basename($filePath);
    }
    /**
     * Delete a file from the storage.
     *
     * @param string $filePath The path to the file within the storage disk.
     */
    public function deleteFile($filePath)
    {
        Storage::disk('public')->delete($filePath);
    }
}
