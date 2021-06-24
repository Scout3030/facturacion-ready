<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Model;

class Woocommerce extends ModelTenant
{
    public $timestamps = false;

    protected $table = 'woocommerce';

    protected $fillable = [
        'url',
        'consumer_key',
        'consumer_secret',
        'options',
        'sync_products',
        'sync_categories',
        'sync_tags',
        'sync_orders',
        'sync_customers'
    ];

    protected $casts = [
        'options' => 'array'
    ];
}
