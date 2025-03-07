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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('client_id');
            $table->string('event_name', 100);
            $table->date('event_date_end');
            $table->string('event_start', 30);
            $table->string('event_end', 30);
            $table->string('event_location', 100);
            $table->binary('image');
            $table->integer('price');
            $table->integer('slot');
            $table->integer('seats_sold');
            $table->integer('seats_unsold');
            $table->decimal('revenue');
            $table->timestamps();

            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('client_id')->references('id')->on('client')->onDelete('cascade')->onUpdate('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
