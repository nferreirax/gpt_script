<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'admins';

    /**
     * Run the migrations.
     * @table admins
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->comment('auto incrementing user_id of each user, unique index');
            $table->string('session_id', 48)->nullable()->default(null)->comment('stores session cookie id to prevent session concurrency');
            $table->string('username', 64)->comment('user\'s name, unique');
            $table->string('password')->nullable()->default(null)->comment('user\'s password in salted and hashed format');
            $table->string('name_first')->nullable()->default(null);
            $table->string('name_last')->nullable()->default(null);
            $table->string('avatar')->nullable()->default(null);
            $table->tinyInteger('active')->default('1')->comment('user\'s activation status');
            $table->bigInteger('last_login_timestamp')->nullable()->default(null)->comment('timestamp of user\'s last login');
            $table->tinyInteger('failed_logins')->default('0')->comment('user\'s failed login attempts');
            $table->integer('last_failed_login')->nullable()->default(null)->comment('unix timestamp of last failed login attempt');
            $table->unique(["username"], 'username');
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
