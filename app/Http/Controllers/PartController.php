<?php

namespace App\Http\Controllers;

use App\Models\part;
use App\Http\Requests\StorepartRequest;
use App\Http\Requests\UpdatepartRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('salesOrder');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'part_id' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'vendor' => 'nullable|string|max:255',
            'qty' => 'nullable|integer',
            'contract_price' => 'nullable|integer',
            'cost_price' => 'nullable|integer',
            'cash_flow' => 'nullable|integer',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $part = new Part;
        $part ->part_id = $request->input('part_id');
        $part->name = $request->input('name');
        $part->vendor = $request->input('vendor');
        $part->qty = $request->input('qty');
        $part->contract_price = $request->input('contract_price');
        $part->cost_price = $request->input('cost_price');
        $part->cash_flow = $request->input('cash_flow');
        $part->save();

        return response()->json([
            'message' => 'Part created successfully',
            'data' => $part
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(part $part)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(part $part)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepartRequest $request, part $part)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(part $part)
    {
        //
    }
}
