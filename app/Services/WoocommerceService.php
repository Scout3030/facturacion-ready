<?php


namespace App\Services;


use App\Models\Tenant\Woocommerce;
use Automattic\WooCommerce\Client;

class WoocommerceService
{
    private $woocommerce;

    public function __construct()
    {
        $woocommerce = Woocommerce::first();

        $this->woocommerce = new Client(
            $woocommerce->woocommerce_app_url,
            $woocommerce->woocommerce_consumer_key,
            $woocommerce->woocommerce_consumer_secret,
            [
                'wp_api' => true,
                'version' => 'wc/v2',
                'timeout' => 10000,
                'verify_ssl' => false
            ]
        );
    }

    /**
     * @param $productId
     * @param $qty
     * @return array
     */
    public function updateStock($productId, $qty){
        $data = [
            "stock_quantity" => $qty
        ];
        return $this->woocommerce->put("products/{$productId}", $data);
    }

    /**
     * @param $name
     * @param $categoryId
     * @return array
     */
    public function createCategory($name, $categoryId){
        $data = [
            "name" => $name,
            "parent" => $categoryId
        ];
        return $this->woocommerce->post("products/categories", $data);
    }

    /**
     * @param $data
     * @return array
     */
    public function createProduct($data){
        return $this->woocommerce->post("products", $data);
    }

    /**
     * @param $productId
     * @param $data
     * @return array
     */
    public function updateProduct($productId, $data){
        return $this->woocommerce->put("products/{$productId}", $data);
    }
}
