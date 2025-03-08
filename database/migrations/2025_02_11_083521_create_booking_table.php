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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->date("booking_date");
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('event_id');
            $table->integer('quantity');
            $table->decimal('payment', 12, 2);
            $table->unsignedBigInteger('staff_id');
           
           
            $table->foreign('client_id')->references('id')->on('client')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('staff_id')->references('id')->on('staffs')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamps();

        });
        DB::table('booking')->insert([
            ['booking_date'=> '2025-09-10' ,'event_id'=>1 ,'client_id'=>2,'quantity'=>12 ,'payment'=>11,'staff_id'=>1],
            ['booking_date'=> '2025-08-10' ,'event_id'=>2 ,'client_id'=>3,'quantity'=>13 ,'payment'=> 12,'staff_id'=>1],
            ['booking_date'=> '2025-07-10' ,'event_id'=>3 ,'client_id'=>1,'quantity'=>14 ,'payment'=>13 ,'staff_id'=>1]
    ]);
        

    }

    /**
     * Reverse the migrations
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
