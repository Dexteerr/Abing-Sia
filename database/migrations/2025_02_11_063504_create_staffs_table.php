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
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string('staff_name', 100);
            $table->string('staff_username', 100);
            $table->string('staff_password', 100);
            $table->timestamps();
        });
        DB::table('staffs')->insert(
            ['staff_name'=> 'Dexter' ,'staff_username'=>'mao' ,'staff_password'=>'mao'],
            ['staff_name'=> 'Dextrue' ,'staff_username'=>'bao' ,'staff_password'=>'bao']
            ,['staff_name'=> 'Dextress' ,'staff_username'=>'tao' ,'staff_password'=>'tao']
    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staffs');
    }
};
