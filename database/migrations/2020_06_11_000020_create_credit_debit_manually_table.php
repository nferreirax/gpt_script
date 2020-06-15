<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditDebitManuallyTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'credit_debit_manually';

    /**
     * Run the migrations.
     * @table credit_debit_manually
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->float('amount');
            $table->text('description')->nullable()->default(null);
            $table->text('admin_notes')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();

            $table->index(["user_id"], 'FK_credit_debit_manually_users');


            $table->foreign('user_id', 'FK_credit_debit_manually_users')
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
