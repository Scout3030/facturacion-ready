<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TenantCreateWoocommerceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('woocommerce', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->string('consumer_key');
            $table->string('consumer_secret');
            $table->string('options')->nullable();
            $table->boolean('sync_products')->default(true);
            $table->boolean('sync_categories')->default(true);
            $table->boolean('sync_tags')->default(true);
            $table->boolean('sync_orders')->default(true);
            $table->boolean('sync_customers')->default(true);
        });

        DB::table('woocommerce')->insert([
            [
                'id' => 1,
                'url' => 'https://mywoocommerce.com',
                'consumer_key' => 'woocommerce-consumer-key',
                'consumer_secret' => 'woocommerce-consumer-secret'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('woocommerce');
    }
}
