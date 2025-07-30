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
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); 
            $table->string('type', 45);              
            $table->string('duration', 45);              
            $table->string('modality', 45);              
            $table->date('date_start');              
            $table->date('date_end');              
            $table->string('code_course', 45)->unique();              

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
        Schema::dropIfExists('courses');
    }
};
