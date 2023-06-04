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
        Schema::create('product_descriptions', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('product_id');              
            $table->string('power_peak');
            $table->enum('orientation', ['N', 'E', 'S', 'W']);
            $table->string('inclination');
            $table->string('area');
            $table->string('longitude');
            $table->string('latitude');
            $table->foreign('product_id')->references('id')->on('products');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_descriptions');
    }
};
