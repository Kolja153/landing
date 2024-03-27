<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function new(Request $request)
    {
        $data = $request->request->all();

        if (isset($data['product_id'])) {
            $product = Product::find($data['product_id']);
            if ($product) {
                $data['snap_product'] = json_encode($product->toArray());
            }
        }

        unset($data['_token']);
        Order::create($data);

        return new JsonResponse('Wrote');
    }
}
