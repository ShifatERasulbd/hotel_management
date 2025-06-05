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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(true);
            $table->string('slug')->nullable(true);
            $table->string('number')->nullable(true);
            $table->string('type')->nullable(true);
            $table->string('status')->nullable(true);
            $table->double('price')->nullable(true);
            $table->string('image')->nullable(true);
            $table->text('description')->nullable(true);
            $table->double('offer_price')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
