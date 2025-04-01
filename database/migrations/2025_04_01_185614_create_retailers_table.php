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
        Schema::create('retailers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('phoneno', length: 10);
            $table->string('profileimage');
            $table->integer('ampc_id');
            $table->string('address');
            $table->string('lat');
            $table->string('long');
            $table->string('pincode');
            $table->string('lastname');
            $table->string('businessname');
            $table->string('shopnumber');
            $table->string('pancard');
            $table->string('adharcard');
            $table->string('accountnumber');
            $table->string('ifsccode');
            $table->string('cancelcheque'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retailers');
    }
};
