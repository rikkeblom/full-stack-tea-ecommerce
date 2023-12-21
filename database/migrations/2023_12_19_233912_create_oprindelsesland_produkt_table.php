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
        Schema::create('oprindelsesland_produkt', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('produkt_id')->nullable();
            $table->unsignedBigInteger('oprindelsesland_id')->nullable();
            $table->foreign('produkt_id')->references('id')->on('produkter')->onDelete('SET NULL');
            $table->foreign('oprindelsesland_id')->references('id')->on('oprindelseslande')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oprindelsesland_produkt');
    }
};
