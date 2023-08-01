<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('food_item_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_companies');
            $table->unsignedBigInteger('id_food');
            $table->unsignedBigInteger('id_contributor');
            $table->string('new_food_name');
            $table->text('new_description')->nullable();
            $table->decimal('new_price', 10, 2);
            $table->string('new_image_url')->nullable();
            $table->timestamps();

            $table->foreign('id_companies')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('id_food')->references('id')->on('food_items')->onDelete('cascade');
            $table->foreign('id_contributor')->references('id')->on('contributors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_item_history');
    }
};
