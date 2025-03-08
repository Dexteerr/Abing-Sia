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
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->text("Client_Name");
            $table->text("Client_Address");
            $table->text("Client_Contact");

            $table->timestamps();
        });
        DB::table('client')->insert([
            [
                'Client_Name' => 'Dexter', 'Client_Address' => 'lanao', 'Client_Contact' => '0922'
            ],
            [
                'Client_Name' => 'Dextrue',
                'Client_Address' => 'mbc',
                'Client_Contact' => '0923'
            ],
            ['Client_Name' => 'Dextress', 'Client_Address' => 'lumbo', 'Client_Contact' => '0924']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
