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
        Schema::create('item_kurv', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('kurv_id')->nullable();
            $table->unsignedBigInteger('item_id')->nullable();
            $table->foreign('kurv_id')->references('id')->on('kurve')->onDelete('SET NULL');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_kurv');
    }
};
