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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('size', 45); 
            $table->string('quantity', 45); 
            $table->string('price', 45); 
            $table->binary('material_multimedia');
            $table->text('description');  

            $table->integer('entrepreneurships_id')->unsigned();
            $table->foreign('entrepreneurships_id')->references('id')->on('entrepreneurships')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('categories_id')->unsigned();
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
