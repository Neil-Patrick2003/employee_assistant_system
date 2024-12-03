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
        Schema::dropIfExists('applications');
        Schema::dropIfExists('resumes');

        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column: 'user_id');
            $table->string(column: 'template');

            $table->foreign(columns: 'user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');


        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column: 'user_id');
            $table->unsignedBigInteger(column: 'template_id');
            $table->text('data');

            $table->foreign(columns: 'user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();

            $table->foreign(columns: 'template_id')
                ->references('id')
                ->on('resume_templates')
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }
};
