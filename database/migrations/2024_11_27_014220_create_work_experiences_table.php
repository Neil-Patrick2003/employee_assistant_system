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
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column: 'user_id');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('job_title');
            $table->text('description');
            $table->string('company');
            $table->timestamps();


            $table->foreign(columns: 'user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_experiences');
    }
};
