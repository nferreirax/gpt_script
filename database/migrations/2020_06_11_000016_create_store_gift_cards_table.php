<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreGiftCardsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'store_gift_cards';

    /**
     * Run the migrations.
     * @table store_gift_cards
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 150);
            $table->unsignedInteger('product_id');
            $table->float('value');
            $table->string('link');
            $table->tinyInteger('active')->default('1');
            $table->timestamps();
            $table->softDeletes();

            $table->index(["product_id"], 'FK_store_gift_cards_store_products');


            $table->foreign('product_id', 'FK_store_gift_cards_store_products')
                ->references('id')->on('store_products')
                ->onDelete('no action')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
