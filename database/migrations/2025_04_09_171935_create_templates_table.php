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
        Schema::create('templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 45); 
            $table->string('size', 45); 
            $table->string('quality', 45); 
            $table->string('format', 45); 
            $table->string('template_code', 45)->unique(); 

            $table->integer('entrepreneurs_id')->unsigned();
            $table->foreign('entrepreneurs_id')->references('id')->on('entrepreneurs')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('templates');
    }
};
