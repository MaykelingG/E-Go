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
        Schema::create('chats', function (Blueprint $table) {
            $table->increments('id');
            $table->text('messages');  
            $table->datetime('date');
            
            $table->integer('entrepreneurs_id')->unsigned();
            $table->foreign('entrepreneurs_id')->references('id')->on('entrepreneurs')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('clients_id')->unsigned();
            $table->foreign('clients_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
