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
        Schema::create('marvels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid'); 
            $table->string('gender', '50');
            $table->string('president', '100')->unique();
            $table->string('localization', '200');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marvels');
    }
};
