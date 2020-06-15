<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreOrdersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'store_orders';

    /**
     * Run the migrations.
     * @table store_orders
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('card_id')->nullable()->default(null);
            $table->float('price')->nullable()->default('0');
            $table->float('value')->nullable()->default('0');
            $table->string('ip')->nullable()->default(null);
            $table->tinyInteger('status')->default('1')->comment('1=pending; 2=processed');           
            $table->timestamp('date_processed')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();

            $table->index(["card_id"], 'FK_store_orders_store_gift_cards');

            $table->index(["product_id"], 'FK_store_orders_store_products');

            $table->index(["user_id"], 'FK_store_orders_users');


            $table->foreign('card_id', 'FK_store_orders_store_gift_cards')
                ->references('id')->on('store_gift_cards')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('product_id', 'FK_store_orders_store_products')
                ->references('id')->on('store_products')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('user_id', 'FK_store_orders_users')
                ->references('id')->on('users')
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
