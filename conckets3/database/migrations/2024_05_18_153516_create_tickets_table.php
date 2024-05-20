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
        Schema::create('tickets', function (Blueprint $table) {
            $table->increment('ticket_id');
            $table->integer('user_id');
            $table->foreign('user_id')->references('users');
            $table->integer('concert_id');
            $table->foreign('concert_id')->references('concerts');
            $table->string('ticket_type');
            $table->string('ticket_code');
            $table->timestamp('purchase_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
