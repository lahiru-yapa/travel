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
        Schema::create('towers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('days');
            $table->text('description')->nullable();  
            $table->text('location_map_link')->nullable();
            $table->string('location');
            $table->text('Included')->nullable();
            $table->text('excluded')->nullable();
            $table->string('group_size');
            $table->string('category');
            $table->decimal('price', 10, 2);
            $table->string('home_image')->nullable();
            $table->string('destination_image')->nullable();
            $table->string('destination_details_main_image')->nullable();
            $table->json('destination_details_image')->nullable();
            $table->json('chapters')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('towers');
    }
};
