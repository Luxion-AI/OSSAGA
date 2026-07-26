<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('period_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('period_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('role'); // e.g., 'chairman', 'sekbid', 'member'
            $table->string('position_name'); // e.g., 'Ketua OSIS', 'Ketua Sekbid 1'
            $table->string('sekbid_name')->nullable(); // To filter content by Sekbid area
            $table->timestamps();

            // A user can hold one specific position per period
            $table->unique(['period_id', 'user_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('period_user');
    }
};
