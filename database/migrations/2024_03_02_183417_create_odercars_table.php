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
        Schema::create('odercars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // ใช้ชื่อคอลัมน์ user_id แทน id
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('nft_id')->nullable();
            $table->foreign('nft_id')->references('nft_id')->on('nfts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('odercars');
    }
};
