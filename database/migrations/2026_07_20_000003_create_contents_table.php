<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('period_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete(); // The author
            $table->string('type'); // news, event, gallery, announcement
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('body');
            $table->string('featured_image_path')->nullable();
            $table->string('status')->default('draft'); // draft, pending, published
            $table->string('sekbid_owner')->nullable(); // Null if general OSIS content
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            
            // Indexing for performance
            $table->index(['period_id', 'type', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
