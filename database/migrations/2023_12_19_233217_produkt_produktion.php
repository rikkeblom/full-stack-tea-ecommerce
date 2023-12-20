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
        Schema::create('produkt_produktion', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('produkt_id')->nullable();
            $table->unsignedBigInteger('produktion_id')->nullable();
            $table->foreign('produkt_id')->references('id')->on('produkter')->onDelete('SET NULL');
            $table->foreign('produktion_id')->references('id')->on('produktionstyper')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produkt_produktion');
    }
};
