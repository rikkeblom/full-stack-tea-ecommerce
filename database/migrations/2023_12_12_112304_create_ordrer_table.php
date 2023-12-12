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
        Schema::create('ordrer', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreign('faktureringsadresse_id')->references('id')->on('Adresse')->onDelete('SET NULL');
            $table->foreign('leveringsadresse_id')->references('id')->on('Adresse')->onDelete('SET NULL');
            $table->foreign('betalingmetode_id')->references('id')->on('Betalingsmetode')->onDelete('SET NULL');
            $table->foreign('betalingsstatus_id')->references('id')->on('Status')->onDelete('SET NULL');
            $table->foreign('kurv_id')->references('id')->on('Kurv')->onDelete('SET NULL');
            $table->foreign('leveringsstatus_id')->references('id')->on('Status')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordrer');
    }
};
