<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'messages';

    /**
     * Run the migrations.
     * @table messages
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('sender_id')->nullable()->default(null);
            $table->unsignedInteger('receiver_id')->nullable()->default(null);
            $table->integer('related_message')->unsigned()->nullable()->default(null);
            $table->string('name')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('ip', 100);           
            $table->string('subject', 200)->nullable()->default(null);
            $table->longText('message');
            $table->tinyInteger('read')->default('0');
            $table->dateTime('read_date')->nullable()->default(null);
            $table->tinyInteger('deleted_inbox')->default('0');
            $table->tinyInteger('deleted_sent')->default('0');
            $table->tinyInteger('is_support')->default('0');
            $table->tinyInteger('is_answer')->default('0');
            $table->tinyInteger('is_archived')->default('0');
            $table->timestamps();
            $table->softDeletes();

            $table->index(["sender_id"], 'FK_messages_users');

            $table->index(["receiver_id"], 'to');

            $table->index(["related_message"], 'FK_message_message');


            $table->foreign('related_message', 'FK_message_message')
                ->references('id')->on('messages')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('sender_id', 'FK_messages_users')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('receiver_id', 'to')
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
