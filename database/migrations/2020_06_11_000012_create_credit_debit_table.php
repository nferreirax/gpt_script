<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditDebitTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'credit_debit';

    /**
     * Run the migrations.
     * @table credit_debit
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->float('points');
            $table->integer('type')->comment('1=offerwalls; 2=Cashout; 3=downline Comissions; 4= credited manually;');
            $table->integer('related_id');
            $table->integer('wallet_id');
            $table->tinyInteger('status');            
            $table->timestamps();
            $table->softDeletes();

            $table->index(["user_id"], 'FK_credit_debit_users');


            $table->foreign('user_id', 'FK_credit_debit_users')
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
