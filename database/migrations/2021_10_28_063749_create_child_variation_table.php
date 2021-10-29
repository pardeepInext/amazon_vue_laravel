<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildVariationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_variation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('child_id')->nullable();
            $table->foreignId('variation_id')->nullable();
            $table->string('stock');
            $table->string('price');
            $table->foreignId('product_id');
            $table->string('sku')->nullable();
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
        Schema::dropIfExists('child_variation');
    }
}
