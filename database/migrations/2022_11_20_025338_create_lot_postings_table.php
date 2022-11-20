<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lot_postings', function (Blueprint $table) {
            $table->id();
            $table->integer('lot_number');
            $table->integer('blk_number');
            $table->integer('area');
            $table->integer('price');
            $table->string('location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lot_postings');
    }
};
