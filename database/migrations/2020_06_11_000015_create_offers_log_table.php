<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersLogTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'offers_log';

    /**
     * Run the migrations.
     * @table offers_log
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('network_id');
            $table->integer('network_type')->nullable()->default(null);
            $table->string('transaction_id', 100)->nullable()->default(null);
            $table->unsignedInteger('user_id')->nullable()->default(null);
            $table->string('offer_id', 100)->nullable()->default(null);
            $table->text('message')->nullable()->default(null);
            $table->string('ip', 100)->nullable()->default(null);
            $table->text('full_call')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();

            $table->index(["user_id"], 'FK_offers_log_users');

            $table->index(["network_id"], 'FK_offers_log_offerwall_networks');


            $table->foreign('network_id', 'FK_offers_log_offerwall_networks')
                ->references('id')->on('offerwall_networks')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('user_id', 'FK_offers_log_users')
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
