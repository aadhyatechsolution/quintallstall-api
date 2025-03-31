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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phoneno'); 
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role', 20)->change();
            $table->string('otp', 20)->change();
            $table->string('status', 20)->change();
            $table->string('wallet', 20)->change();
            $table->string('coin', 20)->change();
            $table->text('two_factor_secret'); 
            $table->text('two_factor_recovery_codes');
            $table->timestamp('two_factor_confirmed_at')->nullable();
            //$table->timestamp('remember_token')->nullable();
            //$table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
