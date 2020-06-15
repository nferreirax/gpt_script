<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersLoginLogTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users_login_log';

    /**
     * Run the migrations.
     * @table users_login_log
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('username')->nullable()->default(null);
            $table->string('password');
            $table->string('ip');
            $table->string('client');
            $table->string('os');
            $table->string('device');
            $table->string('brand');
            $table->string('model');
            $table->tinyInteger('status')->default('1')->comment('0= wrong login; 1= successeful login');
            $table->timestamps();
            $table->softDeletes();

            $table->index(["user_id"], 'FK_users_login_log_users');


            $table->foreign('user_id', 'FK_users_login_log_users')
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
