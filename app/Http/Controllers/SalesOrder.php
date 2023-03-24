<?php

namespace App\Http\Controllers;

use App\Models\sales_order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SalesOrder extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sales_order_id' => 'required|string|max:255',
            'customer_id' => 'required|max:255',
            'order_date' => 'required|date_format:Y-m-d',
            'delivery_date' => 'required|date_format:Y-m-d'
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $sales = new sales_order;
        $sales->sales_order_id = $request->input('sales_order_id');
        $sales->customer_id = $request->input('customer_id');
        $sales->order_date = $request->input('order_date');
        $sales->delivery_date = $request->input('delivery_date');
        $sales->save();
    
        return response()->json([
            'message' => 'Customer created successfully',
            'data' => $sales
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(sales_order $sales_order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sales_order $sales_order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sales_order $sales_order)
    {
        //
    }
}
