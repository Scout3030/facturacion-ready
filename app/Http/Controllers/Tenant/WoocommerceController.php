<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Resources\Tenant\WoocommerceResource;
use App\Models\Tenant\Woocommerce;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\JsonResource;

class WoocommerceController extends Controller
{
    public function index(){
        return view('tenant.woocommerce.index');
    }

    public function record(){
        $woocommerce = Woocommerce::first();
        return new WoocommerceResource($woocommerce);
    }

    public function update(Request $request){
        Woocommerce::updateOrCreate(
            ['id' =>  request('id')],
            $request->input()
        );

        return [
            'success' => true,
            'message' => 'Configuración actualizada'
        ];
    }
}
