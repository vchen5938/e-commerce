<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->integer('customer_reviews')->unsigned()->default(0);
            $table->integer('num_customer_ratings')->unsigned()->default(0);
            $table->string('cover_image');
            $table->text('product_description');
            $table->text('product_information');
            $table->string('product_videos')->nullable();
            $table->string('product_images')->nullable();
            $table->text('qna')->nullable();
            $table->integer('price')->unsigned();
            $table->string('url');
            $table->string('brand');
            $table->bigInteger('cgy_id')->index()->unsigned();
            $table->foreign('cgy_id')->references('id')->on('cgies')->onDelete('cascade');
            $table->boolean('enabled')->default(true);
            $table->boolean('sort')->default(0);
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

        Schema::table('items', function(Blueprint $table){ 
            $table->dropForeign(['cgy_id']);
        });

        Schema::dropIfExists('items');

    }
}
