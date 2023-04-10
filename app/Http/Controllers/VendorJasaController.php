<?php

namespace App\Http\Controllers;

use App\Models\vendor_jasa;
use App\Models\vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class VendorJasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendors = Vendor::all();
        // dd($vendors);
        return view('createJasa', compact('vendors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'kode_jasa' => 'required|string|max:255',
            'satuan' => 'nullable|string',
            'nama_jasa' => 'nullable|string',
            'cost_price' => 'nullable|integer',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            dd($validator);
            return back()->withErrors($validator)->withInput();
        }

        $vendor_data = Vendor::find($request->vendor_id);

        if (!$vendor_data) {
            return back()->withErrors('Data Vendor tidak ditemukan');
        }

        $vendor_data->total_pembelian += 1;
        $vendor_data->save();

       vendor_jasa::create([
        'vendor_id' => $vendor_data->id,
        'kode_jasa' => $request->kode_jasa,
        'kode_jasa_so' =>'So'.time(),
        'nama_jasa' => $request->nama_jasa,
        'satuan' => $request->satuan,
        'cost_price' => $request->cost_price,
        'description' => $request->description,
       ]);

        return back()->with('success', 'Data jasa berhasil diperbarui!');
    }

    /**
     * Display the specified resource.
     */
    public function show(vendor_jasa $vendor_jasa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vendor_jasa $vendor_jasa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vendor_jasa $vendor_jasa)
    {
        //
    }
}
