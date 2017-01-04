<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            // $table->integer('supplier_id')->unsigned()->index();
            $table->string('name');
            $table->decimal('consumer_price', 5, 2)->unsigned();

            $table->integer('qty')->unsigned();

            // $table->integer('commission');
            $table->timestamps();
        });

        schema::create('item_supplier', function (Blueprint $table){
           $table->integer('item_id')->unsigned()->index();
//           $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');

           $table->integer('supplier_id')->unsigned()->index();
//           $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');

           $table->integer('quantity')->unsignged();
           $table->double('total',15, 10)->unsigned();
           $table->decimal('supplier_price', 5, 2)->unsigned();
           $table->integer('discount');


           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('items');
        Schema::drop('item_supplier');

    }
}
