<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class ProcessMediaUpload implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $filePath;
    protected $options;

    public function __construct(string $filePath, array $options = [])
    {
        $this->filePath = $filePath;
        $this->options = $options;
    }

    public function handle(): void
    {
        // 1. Download file from temp storage if needed
        // 2. Process image (generate thumbnail, optimize size)
        // 3. Move to permanent R2/S3 bucket
        // 4. Update the related model's file path

        $disk = Storage::disk('s3');
        if ($disk->exists($this->filePath)) {
            // Processing logic here using Intervention Image or similar
            // This is a stub for the heavy image processing offloaded to the queue
        }
    }
}
