<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersHistoryTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'offers_history';

    /**
     * Run the migrations.
     * @table offers_history
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('network_id');
            $table->float('credits');
            $table->tinyInteger('credit_type')->comment('1=Coins;  2= Points; 3=Balance;');
            $table->string('txd');
            $table->tinyInteger('credited')->default('0')->comment('0=not credit;1= credited;2=chargeback; 3= admin manual chargeback');
            $table->integer('offer_id')->nullable()->default('0')->comment('0=didn\'t identified; else offerid');
            $table->string('offer_name')->nullable()->default(null);
            $table->timestamp('date_credited')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();

            $table->index(["user_id"], 'user_id');

            $table->index(["network_id"], 'FK_offers_history_offerwall_networks');

            $table->unique(["id"], 'id');


            $table->foreign('network_id', 'FK_offers_history_offerwall_networks')
                ->references('id')->on('offerwall_networks')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('user_id', 'user_id')
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
