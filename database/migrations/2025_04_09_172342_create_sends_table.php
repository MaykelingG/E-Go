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
        Schema::create('sends', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_send');
            $table->string('address');
            
            $table->integer('products_id')->unsigned();
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('deliveries_id')->unsigned();
            $table->foreign('deliveries_id')->references('id')->on('deliveries')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sends');
    }
};
