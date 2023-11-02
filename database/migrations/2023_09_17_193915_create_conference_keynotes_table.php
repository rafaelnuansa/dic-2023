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
        Schema::create('conference_keynotes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conference_id');
            $table->unsignedBigInteger('keynote_id');
            $table->bigInteger('sort')->nullable();
            $table->timestamps();
            // Menambahkan foreign key ke conferences
            $table->foreign('conference_id')->references('id')->on('conferences')->onDelete('cascade');
            // Menambahkan foreign key ke keynotes
            $table->foreign('keynote_id')->references('id')->on('keynotes')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conference_keynotes');
    }
};
