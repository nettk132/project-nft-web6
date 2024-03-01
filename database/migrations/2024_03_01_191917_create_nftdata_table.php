<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNftdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nftdata', function (Blueprint $table) {
            $table->increments('nft_id');
            $table->unsignedBigInteger('catagory_id');
            $table->foreign('catagory_id')->references('catagory_id')->on('catagories');
            $table->string('name')->nullable();
            $table->string('creator')->nullable();
            $table->string('desc')->nullable();
            $table->string('Owned_by')->nullable();
            $table->decimal('price')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nftdata');
    }
}
