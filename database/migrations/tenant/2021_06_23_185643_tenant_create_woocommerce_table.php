<?php

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
            $table->string('url');
            $table->string('consumer_key');
            $table->string('consumer_secret');
            $table->string('options');
            $table->boolean('sync_products')->default(true);
            $table->boolean('sync_categories')->default(true);
            $table->boolean('sync_tags')->default(true);
            $table->boolean('sync_orders')->default(true);
            $table->boolean('sync_clients')->default(true);
        });
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
