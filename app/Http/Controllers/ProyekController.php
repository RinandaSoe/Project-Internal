<?php

namespace App\Http\Controllers;

use App\Models\proyek;
use App\Http\Requests\StoreproyekRequest;
use App\Http\Requests\UpdateproyekRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'customer_id' => 'required',    
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $proyek = new Proyek;
        $proyek->customer_id = $request->input('customer_id');
        $proyek->nama = $request->input('nama');
        $proyek->save();
    
        return response()->json([
            'message' => 'Proyek created successfully',
            'data' => $proyek
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproyekRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(proyek $proyek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(proyek $proyek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproyekRequest $request, proyek $proyek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(proyek $proyek)
    {
        //
    }
}
