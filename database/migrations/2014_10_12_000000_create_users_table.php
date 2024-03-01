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
            $table->id();
            $table->string('name',255);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('first_name',50)->nullable();
            $table->string('last_name',50)->nullable();
            $table->string('phone',10)->nullable();
            $table->string('usertype')->default('user');
            $table->unsignedBigInteger('address_id')->nullable();
            $table->foreign('address_id')->references('address_id')->on('addresses');
            $table->unsignedBigInteger('nft_id')->nullable();
            $table->foreign('nft_id')->references('nft_id')->on('nfts');
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
