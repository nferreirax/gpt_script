<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreProductsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'store_products';

    /**
     * Run the migrations.
     * @table store_products
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->float('price');
            $table->float('price_discount')->default('0');
            $table->string('price_discount_reason');
            $table->float('value')->comment('used for paypal');
            $table->integer('cat_id')->unsigned();
            $table->tinyInteger('notify_admin')->default('0');
            $table->tinyInteger('asset')->default('1')->comment('balance to charge 1 = points; 2 = Balance');
            $table->string('image_path')->nullable()->default('0');
            $table->float('qtd_available')->default('0');
            $table->tinyInteger('active')->default('0');
            $table->timestamps();
            $table->softDeletes();

            $table->index(["cat_id"], 'FK_store_products_store_cat');


            $table->foreign('cat_id', 'FK_store_products_store_cat')
                ->references('id')->on('store_cat')
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
