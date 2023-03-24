<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;
use App\Models\proyek;

class CustomerController extends Controller
{

    public function index()
    {
        return view('salesOrder');
    }
    /**
     * Handle the incoming request.
     */
    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'npwp' => 'nullable|string|max:255',
            'alamat' => 'nullable|string'
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $customer = new Customer;
        $customer->name = $request->input('name');
        $customer->phone = $request->input('phone');
        $customer->npwp = $request->input('npwp');
        $customer->alamat = $request->input('alamat');
        $customer->save();
    
        return response()->json([
            'message' => 'Customer created successfully',
            'data' => $customer
        ], 201);
    }
    
}
