<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWalletsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'wallets';

    /**
     * Run the migrations.
     * @table wallets
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->string('symbol', 155)->nullable()->default(null);
            $table->string('sufix', 20)->nullable()->default(null);
            $table->string('prefix', 20)->nullable()->default(null);
            $table->tinyInteger('sort');
            $table->tinyInteger('allow_deposits')->default('0')->comment('allow deposits from payment processors');
            $table->tinyInteger('active');
            $table->timestamps();
            $table->softDeletes();
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
