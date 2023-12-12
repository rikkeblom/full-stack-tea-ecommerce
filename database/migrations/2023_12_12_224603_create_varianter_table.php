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
        Schema::create('varianter', function (Blueprint $table) {
            $table->id();
            $table->foreign('produkt_id')->references('id')->on('Produkt')->onDelete('SET NULL');
            $table->timestamps();
            $table->string('titel');
            $table->string('type');
            $table->smallInteger('lager');
            $table->smallInteger('pris');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('varianter');
    }
};
