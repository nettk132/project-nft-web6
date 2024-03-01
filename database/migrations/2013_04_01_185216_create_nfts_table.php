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
        Schema::create('nfts', function (Blueprint $table) {
            $table->id('nft_id');
            $table->unsignedBigInteger('catagory_id');
            $table->foreign('catagory_id')->references('catagory_id')->on('catagories');
            $table->string('name');
            $table->string('creator');
            $table->string('desc');
            $table->string('Owned_by');
            $table->decimal('price');
            $table->string('image');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nfts');
    }
};
