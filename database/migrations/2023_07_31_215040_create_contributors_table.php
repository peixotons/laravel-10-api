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
        Schema::create('contributors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_companies');
            $table->string('contributor_name');
            $table->string('email')->unique();
            $table->string('senha');
            $table->string('phone');
            $table->boolean('dashboard_permission')->default(false);
            $table->boolean('orders_permission')->default(false);
            $table->boolean('category_permission')->default(false);
            $table->timestamps();
            $table->softDeletes(); 

            $table->foreign('id_companies')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contributors');
    }
};
