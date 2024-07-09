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
        Schema::create('tbl_staff', function (Blueprint $table) {
            $table->id('staff_id');
            $table->string('Employee_lname');
            $table->string('Employee_fname');
            $table->string('Employee_mname');
            $table->string('Office_name');
            $table->string('Allotted_time');
            $table->string('Task');
            $table->string('task_details');
            $table->unsignedBigInteger('admin_id');
 
            $table->foreign('admin_id')->references('admin_id')->on('tbl_admin');
            
            $table->unsignedBigInteger('user_id');
        
            $table->foreign('user_id')->references('user_id')->on('tbl_users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_staff');
    }
};