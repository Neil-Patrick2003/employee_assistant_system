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
        Schema::create('job_educations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column: 'job_listing_id');
            $table->string('level');
            $table->string('description');

            $table->foreign(columns: 'job_listing_id')
                ->references('id')
                ->on('job_listings')
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_educations');
    }
};
