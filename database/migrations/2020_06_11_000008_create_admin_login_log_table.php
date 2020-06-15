<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminLoginLogTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'admin_login_log';

    /**
     * Run the migrations.
     * @table admin_login_log
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('admin_id')->unsigned()->nullable()->default(null);
            $table->string('username')->nullable()->default(null);
            $table->unsignedInteger('ip');
            $table->string('pass', 150)->nullable()->default(null)->comment('pass used in wrong login');
            $table->tinyInteger('status')->comment('1 = success; 2 = fail; 3 = username don\'t exist');
            $table->timestamps();
            $table->softDeletes();
            
            $table->index(["admin_id"], 'FK_admin_login_log_admins');


            $table->foreign('admin_id', 'FK_admin_login_log_admins')
                ->references('id')->on('admins')
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
