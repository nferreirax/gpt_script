<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAchievementLogTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'achievement_log';

    /**
     * Run the migrations.
     * @table achievement_log
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('level_id');
            $table->float('offers');
            $table->float('points');
            $table->float('bonus_credited')->nullable()->default('0');
            $table->timestamps();
            $table->softDeletes();

            $table->index(["user_id"], 'FK_achievement_log_users');

            $table->index(["level_id"], 'FK_achievement_log_achievement_levels');


            $table->foreign('level_id', 'FK_achievement_log_achievement_levels')
                ->references('id')->on('achievement_levels')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('user_id', 'FK_achievement_log_users')
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
