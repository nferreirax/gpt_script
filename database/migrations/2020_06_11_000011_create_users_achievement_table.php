<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersAchievementTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users_achievement';

    /**
     * Run the migrations.
     * @table users_achievement
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->integer('offers')->nullable()->default('0');
            $table->integer('offers_last_month')->nullable()->default('0');
            $table->decimal('points', 11, 2)->nullable()->default('0.00');
            $table->decimal('points_last_month', 11, 2)->nullable()->default('0.00');
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('user_id', 'users_achievement_user_id')
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
