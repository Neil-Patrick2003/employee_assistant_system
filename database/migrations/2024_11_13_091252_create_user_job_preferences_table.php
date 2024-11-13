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
        Schema::create('user_job_preferences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column: 'user_id');
            $table->decimal('min_salary', 10, 2);  // 10 total digits, 2 after decimal point
            $table->string('work_experience');
            $table->string('category');
            $table->string('work_policy');
            $table->string('scope');
            $table->string('location');

            $table->foreign(columns: 'user_id')
            ->references('id')
            ->on('users')
            ->cascadeOnDelete();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_job_preferences');
    }
};
