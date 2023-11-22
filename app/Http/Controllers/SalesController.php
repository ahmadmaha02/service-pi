<?php

namespace App\Http\Controllers;
use App\Models\Sales;

class SalesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function read($sales_id = null)
    {
        if ($sales_id) {
            $sales = Sales::with('customer', 'product')->find($sales_id);

            if (!$sales) {
                return response()->json([
                    'success' => false,
                    'message' => 'Sale not found',
                    'data' => null
                ], 404);
            }

            return response()->json([
                'success' => true,
                'data' => [
                    'sales' => $sales,
                    'product' => [
                        'name_product' => $sales->product->name_product,
                        'unit_price' => $sales->product->unit_price,
                        'total_price' => $sales->product->total_price,
                    ],
                ]
            ]);
        } else {
            $sales = Sales::with('customer', 'product')->get();

            return response()->json([
                'success' => true,
                'data' => [
                    'sales' => $sales
                ]
            ]);
        }
    }
}
