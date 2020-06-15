<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferwallNetworksTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'offerwall_networks';

    /**
     * Run the migrations.
     * @table offerwall_networks
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->comment('ID of Affiliate Network');
            $table->unsignedTinyInteger('enabled')->default('0')->comment('1 = Network is enabled, 0 = network is disabled');
            $table->unsignedTinyInteger('enabled_postback')->default('1')->comment('1 = postback is enabled, 0 = postback is disabled');
            $table->string('name')->nullable()->default(null)->comment('Name of the Affiliate Network');
            $table->text('url')->nullable()->default(null)->comment('URL to the Affiliate Network');
            $table->string('logo_image')->nullable()->default(null);
            $table->string('iframe_id')->nullable()->default(null);
            $table->string('iframe_key')->nullable()->default(null);
            $table->text('iframe_url')->nullable()->default(null);
            $table->text('postback_ips')->nullable()->default(null)->comment('IP addresses used in POSTBACK by this network. Separated by , or * for any.');
            $table->integer('credit_wallet')->unsigned();
            $table->float('credit_multiplier')->default('1');
            $table->unsignedTinyInteger('order')->default('1');
            $table->integer('payment_hold')->default('30');
            $table->integer('payment_hold_over')->default('0');
            $table->integer('ref_commissions')->default('0');
            $table->tinyInteger('show_offerwalls')->default('1');
            $table->tinyInteger('show_earn_passive')->default('0');
            $table->tinyInteger('show_earn_surveys')->default('0');
            $table->tinyInteger('show_earn_offerwalls')->default('1');
            $table->tinyInteger('category')->default('1')->comment('1=general;2=surveys;3=videos;4=PTC;5=APPS download');
            $table->string('postback_method', 100)->nullable()->default(null);
            $table->string('postback_tid', 155)->nullable()->default(null);
            $table->string('postback_rate', 155)->nullable()->default(null);
            $table->string('postback_subid', 155)->nullable()->default(null);
            $table->string('postback_status', 155)->nullable()->default(null);
            $table->string('postback_value_reverse', 155)->nullable()->default(null);
            $table->string('postback_value_credit', 155)->nullable()->default(null);
            $table->string('postback_success', 155)->nullable()->default(null);
            $table->string('postback_error', 155)->nullable()->default(null);
            $table->string('postback_cname', 155)->nullable()->default(null);
            $table->string('postback_cid', 155)->nullable()->default(null);
            $table->string('postback_reversal_reason', 155)->nullable()->default(null);
            $table->string('postback_filter_duplicates', 155)->nullable()->default(null);
            $table->string('postback_signature', 155)->nullable()->default(null);
            $table->string('postback_signature_encryption', 155)->nullable()->default(null);
            $table->string('postback_signature_built', 155)->nullable()->default(null);
            $table->text('postback_url')->nullable()->default(null);
            $table->string('postback_password')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();

            $table->index(["credit_wallet"], 'FK_offerwall_networks_wallets');


            $table->foreign('credit_wallet', 'FK_offerwall_networks_wallets')
                ->references('id')->on('wallets')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
