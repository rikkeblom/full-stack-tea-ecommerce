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
        Schema::create('produkter', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->mediumText('beskrivelse');
            $table->string('titel');
            $table->string('undertitel');
            $table->string('type');
            $table->boolean('koffein');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produkter');
    }
};
