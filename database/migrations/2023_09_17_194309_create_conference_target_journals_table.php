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
        Schema::create('conference_target_journals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conference_id');
            $table->unsignedBigInteger('target_journal_id');
            $table->timestamps();

            // Menambahkan foreign key ke conferences
            $table->foreign('conference_id')->references('id')->on('conferences')->onDelete('cascade');

            // Menambahkan foreign key ke field_of_studies
            $table->foreign('target_journal_id')->references('id')->on('target_journals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conference_target_journals');
    }
};
