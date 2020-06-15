<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersPostbackLogTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'offers_postback_log';

    /**
     * Run the migrations.
     * @table offers_postback_log
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('aid')->default('0')->comment('Affiliate Network ID');
            $table->unsignedInteger('sid')->default('0')->comment('Submission ID');
            $table->unsignedInteger('oid')->default('0')->comment('Offer ID');
            $table->unsignedInteger('cid')->default('0')->comment('Campaign ID');
            $table->string('username', 15)->comment('Username of whom this submission belongs to');
            $table->text('message')->comment('A message describing error');
            $table->text('request_vars')->comment('Logging of any $_GET or $_POST variables');
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
