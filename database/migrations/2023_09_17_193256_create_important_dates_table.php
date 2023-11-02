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
        Schema::create('important_dates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conference_id');
            $table->date('registration_submission');
            $table->date('proceeding_submission');
            $table->timestamps();

            $table->foreign('conference_id')
            ->references('id')
            ->on('conferences')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('important_dates');
    }
};
