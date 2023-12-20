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
        Schema::create('billede_produkt', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('produkt_id')->nullable();
            $table->unsignedBigInteger('billede_id')->nullable();
            $table->foreign('produkt_id')->references('id')->on('produkter')->onDelete('SET NULL');
            $table->foreign('billede_id')->references('id')->on('billeder')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billede_produkt');
    }
};
