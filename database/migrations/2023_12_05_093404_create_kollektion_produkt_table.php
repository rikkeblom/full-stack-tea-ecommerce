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
        Schema::create('kollektion_produkt', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreign('produkt_id')->references('id')->on('Produkt')->onDelete('SET NULL');
            $table->foreign('kollektion_id')->references('id')->on('Kollektion')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produkt__kollektions');
    }
};
