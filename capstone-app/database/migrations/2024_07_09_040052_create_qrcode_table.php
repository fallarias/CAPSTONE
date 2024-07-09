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
        Schema::create('tbl_qrcode', function (Blueprint $table) {
            $table->id('qrcode_id');
            $table->dateTime('time_in');
            $table->dateTime('time_out');
            $table->unsignedBigInteger('staff_id');
 
            $table->foreign('staff_id')->references('staff_id')->on('tbl_staff');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_qrcode');
    }
};
