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
        Schema::create('logins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('password');

            $table->integer('clients_id')->unsigned();
            $table->foreign('clients_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('administrators_id')->unsigned();
            $table->foreign('administrators_id')->references('id')->on('administrators')->onDelete('cascade')->onUpdate('cascade');
                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logins');
    }
};
