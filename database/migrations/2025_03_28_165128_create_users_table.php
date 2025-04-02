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
            $table->string('phoneno',length: 10); 
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role', length: 20);
            $table->string('otp', length: 20);
            $table->string('status', length: 20);
            $table->string('wallet', length: 20);
            $table->string('coin', length: 20);
            $table->text('two_factor_secret'); 
            $table->text('two_factor_recovery_codes');
            $table->timestamp('two_factor_confirmed_at')->nullable();
            //table->timestamp('remember_token')->nullable();
            $table->rememberToken();
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
