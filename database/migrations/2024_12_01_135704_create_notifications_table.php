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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column: 'user_id');
            $table->unsignedBigInteger(column: 'application_id');
            $table->text('message');
            $table->timestamps();

            $table->foreign(columns: 'user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();


            $table->foreign(columns: 'application_id')
                ->references('id')
                ->on('applications')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
