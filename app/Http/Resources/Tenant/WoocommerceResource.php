<?php

namespace App\Http\Resources\Tenant;

use Illuminate\Http\Resources\Json\JsonResource;

class WoocommerceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'url' => $this->url,
            'consumer_key' => $this->consumer_key,
            'consumer_secret' => $this->consumer_secret,
            'options' => $this->options,
            'sync_products' => (bool) $this->sync_products,
            'sync_categories' => (bool) $this->sync_categories,
            'sync_tags' => (bool) $this->sync_tags,
            'sync_orders' => (bool) $this->sync_orders,
            'sync_customers' => (bool) $this->sync_customers
        ];
    }
}
