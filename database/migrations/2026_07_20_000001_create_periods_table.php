<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('periods', function (Blueprint $table) {
            $table->id();
            $table->integer('start_year');
            $table->integer('end_year');
            $table->string('cabinet_name');
            $table->string('theme')->nullable(); // Tagline / Slogan
            $table->text('chairman_greeting')->nullable();
            $table->string('chairman_photo_path')->nullable();
            $table->boolean('is_active')->default(false); // Only one should be active
            $table->json('visual_identity')->nullable(); // Colors or specific branding for this period
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('periods');
    }
};
