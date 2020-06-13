<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_order', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('item_id')->index()->unsigned();
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->bigInteger('order_id')->index()->unsigned();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->integer('qty')->default(1)->unsigned();
            $table->text('description')->nullable();
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
        Schema::table('item_order', function(Blueprint $table){ 
            $table->dropForeign(['item_id']);
            $table->dropForeign(['order_id']);
        });
        Schema::dropIfExists('item_order');
    }
}
