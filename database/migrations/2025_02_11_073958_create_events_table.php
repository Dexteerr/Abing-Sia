<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name', 100);
            $table->date('event_date');
            $table->date('event_date_end');
            $table->string('event_start', 30);
            $table->string('event_end', 30);
            $table->string('event_location', 100);
            $table->binary('image');
            $table->integer('price');
            $table->integer('slot');
            $table->integer('seat_sold');
            $table->integer('seats_unsold');
            $table->decimal('revenue');
            $table->timestamps();


           
        });
        DB::table('events')->insert([
            [
             "event_name" => 'maoba',
            "event_date" => '2025-3-3',
             "event_date_end" => '2024-4-4',
             "event_start" => '5pm',
             "event_end" => '8pm',
             "event_location" => 'alubijid area',
             "image"=> '',
             "price" => 100,
             "slot" => 10,
             "seat_sold" => 5,
             "seats_unsold" => 5,
             "revenue" => 20.1
 
            ], [
                "event_name" => 'dex',
               "event_date" => '2025-4-3',
                "event_date_end" => '2024-5-4',
                "event_start" => '4am',
                "event_end" => '8am',
                "event_location" => 'laguindingan area',
                "image"=> '',
                "price" => 200,
                "slot" => 20,
                "seat_sold" => 6,
                "seats_unsold" => 6,
                "revenue" => 20.2
    
               ], [
                "event_name" => 'bossdogs',
               "event_date" => '2025-5-3',
                "event_date_end" => '2024-6-4',
                "event_start" => '7am',
                "event_end" => '9am',
                "event_location" => 'gitagum area',
                "image"=> '',
                "price" => 300,
                "slot" => 30,
                "seat_sold" => 8,
                "seats_unsold" => 8,
                "revenue" => 30.1
    
               ],

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
