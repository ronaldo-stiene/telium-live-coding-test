<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_product', function (Blueprint $table) {
            $table->id('supplier_product_id');
            $table->timestamps();
            $table->foreign('supplier_id')->references('supplier_id')->on('supplier');
            $table->foreign('product_id')->references('product_id')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier_product');
    }
}
