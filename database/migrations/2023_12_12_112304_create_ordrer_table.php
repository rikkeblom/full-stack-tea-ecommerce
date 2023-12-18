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
            $table->unsignedBigInteger('faktureringsadresse_id')->nullable();
            $table->unsignedBigInteger('leveringsadresse_id')->nullable();
            $table->unsignedBigInteger('betalingmetode_id')->nullable();
            $table->unsignedBigInteger('betalingsstatus_id')->nullable();
            $table->unsignedBigInteger('kurv_id')->references('id')->nullable();
            $table->unsignedBigInteger('leveringsstatus_id')->nullable();

            $table->foreign('faktureringsadresse_id')->references('id')->on('adresser')->onDelete('SET NULL');
            $table->foreign('leveringsadresse_id')->references('id')->on('adresser')->onDelete('SET NULL');
            $table->foreign('betalingmetode_id')->references('id')->on('betalingsmetoder')->onDelete('SET NULL');
            $table->foreign('betalingsstatus_id')->references('id')->on('status')->onDelete('SET NULL');
            $table->foreign('kurv_id')->references('id')->on('kurve')->onDelete('SET NULL');
            $table->foreign('leveringsstatus_id')->references('id')->on('status')->onDelete('SET NULL');
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
