<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
                $table->string('name')->nullable();
                $table->text('description')->nullable();
                $table->string('photo')->nullable();
                $table->text('photos')->nullable();
                $table->decimal('price', 15, 2)->nullable()->default(0);
                $table->decimal('compare_price', 15, 2)->nullable();
                $table->decimal('item_cost', 15, 2)->nullable();
                $table->tinyInteger('charge_tax')->default(0);
                $table->string('sku')->nullable();
                $table->string('barcode')->nullable();
                $table->integer('quantity')->default(1);
                $table->integer('product_type_id')->unsigned()->default(1);
                $table->string('weight')->nullable();
                $table->integer('country_id')->unsigned()->nullable();
                //$table->foreign('country_id')->references('id')->on('countries')->onUpdate('set null')->onDelete('set null');
                $table->string('hs')->nullable();
                $table->foreign('product_type_id')->references('id')->on('product_types')->onDelete('cascade');
                $table->string('slug')->unique();
                $table->timestamps();
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
