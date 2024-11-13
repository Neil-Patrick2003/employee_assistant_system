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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column: 'company_id');
            $table->string('title');
            $table->string('description');
            $table->decimal('salary', 10, 2);  // 10 total digits, 2 after decimal point
            $table->string('location');
            $table->string('work_policy');
            $table->string('scope');
            $table->integer('requierd_work_experience');//year of experience
            $table->integer('minimum_age');
            $table->integer('maximum_age');
            $table->string('category');

            $table->foreign(columns: 'company_id')
                ->references('id')
                ->on('companies')
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
