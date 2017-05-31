<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('goods', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default('');
            $table->integer('column')->default(0);
            $table->integer('cat1id')->default(0);
            $table->string('cat1name')->default('');
            $table->integer('cat2id')->default(0);
            $table->string('cat2name')->default('');
            $table->string('image_page')->default('');
            $table->jsonb('images');
            $table->string('buy_url')->default('');
            $table->string('shop_url')->default('');
            $table->jsonb('hotword');
            $table->decimal('price', 10, 2)->default(0.00);
            $table->decimal('cost_price', 10, 2)->default(0.00);
            $table->date('create_date');
            $table->dateTime('create_time');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->text('description');
            $table->text('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('goods');
    }
}
