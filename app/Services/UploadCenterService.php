<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class UploadCenterService
{
    /**
     * Upload a file to Cloudflare R2 or configured S3 storage.
     */
    public function uploadToR2(UploadedFile $file, string $folder = 'uploads'): string
    {
        $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs($folder, $filename, 's3');
        
        return $path;
    }

    /**
     * Generate a pre-signed URL for direct browser uploads.
     */
    public function generatePresignedUrl(string $path, int $expirationMinutes = 15): string
    {
        return Storage::disk('s3')->temporaryUrl(
            $path, now()->addMinutes($expirationMinutes)
        );
    }
}
