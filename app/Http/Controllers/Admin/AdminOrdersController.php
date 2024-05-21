<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrdersController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::all()->sortByDesc('id')->toArray();

        return view('admin.orders.index', ['orders' => $orders]);
    }

    public function delete($id)
    {
        $order = Order::find($id);
        if ($order) {
            $order->delete();
        }

        return redirect()->route('admin_orders_index');
    }
}
