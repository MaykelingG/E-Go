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
        Schema::create('entrepreneurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('age', 3);
            $table->string('country');
            $table->string('nationality');
            $table->string('departament');
            $table->string('municipality');
            $table->string('identification')->unique();
            $table->string('sex', 10);
            $table->string('telephone', 15)->unique();
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrepreneurs');
    }
};
