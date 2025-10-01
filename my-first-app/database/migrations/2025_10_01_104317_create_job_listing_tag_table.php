<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_listing_tag', function (Blueprint $table) {
            $table->id();

            // Foreign key for jobs
            $table->foreignIdFor(\App\Models\Job::class, 'job_listing_id')
                  ->constrained('job_listings') // points to job_listings table
                  ->cascadeOnDelete();

            // Foreign key for tags
            $table->foreignIdFor(\App\Models\Tag::class)
                  ->constrained() // points to tags table
                  ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listing_tag');
    }
};
