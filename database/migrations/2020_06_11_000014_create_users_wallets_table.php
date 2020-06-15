<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersWalletsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users_wallets';

    /**
     * Run the migrations.
     * @table users_wallets
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('wallet_id');
            $table->decimal('amount', 65, 20);
            $table->timestamps();
            $table->softDeletes();

            $table->index(["user_id"], 'FK_users_wallets_users');

            $table->index(["wallet_id"], 'FK_users_wallets_wallets');


            $table->foreign('user_id', 'FK_users_wallets_users')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('wallet_id', 'FK_users_wallets_wallets')
                ->references('id')->on('wallets')
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
