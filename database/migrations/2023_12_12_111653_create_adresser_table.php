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
        Schema::create('adresser', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fornavn')->nullable();
            $table->string('efternavn')->nullable();
            $table->string('land')->nullable();
            $table->string('adresse_1')->nullable();
            $table->string('adresse_2')->nullable();
            $table->string('by')->nullable();
            $table->string('postnummer')->nullable();
            $table->string('firma')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adresser');
    }
};
