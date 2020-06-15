<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreOrdersCryptoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'store_orders_crypto';

    /**
     * Run the migrations.
     * @table store_orders_crypto
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('order_id');
            $table->float('crypto_value');
            $table->float('crypto_send');
            $table->tinyInteger('coin')->default('1')->comment('1= BTC; 2= ETH; 3= LTC; 4= BCH;');
            $table->timestamps();
            $table->softDeletes();

            $table->index(["order_id"], 'FK_store_orders_crypto_store_orders');


            $table->foreign('order_id', 'FK_store_orders_crypto_store_orders')
                ->references('id')->on('store_orders')
                ->onDelete('cascade')
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
