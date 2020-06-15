<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVipLevelsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'vip_levels';

    /**
     * Run the migrations.
     * @table vip_levels
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->integer('privmessage');
            $table->integer('auto_min_reg_time')->nullable()->default('0');
            $table->integer('auto_points_hold_over')->default('0');
            $table->integer('auto_points_hold_days')->default('0');
            $table->integer('auto_min_earnings')->default('0');
            $table->integer('auto_max_earnings')->default('0');
            $table->float('min_cashout')->default('0');
            $table->string('badge');
            $table->string('avatar');
            $table->tinyInteger('level');
            $table->float('ref_commissions')->default('10');
            $table->float('store_pp_max_24')->default('30');
            $table->float('store_coupons_max_24')->default('25');
            $table->tinyInteger('enabled')->default('1');
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
