<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\vendor_barang;
use App\Models\vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\vendorController ;

class VendorBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendors = Vendor::all();
        return view('create', ['vendors' => $vendors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required|string|max:255',
            'satuan' => 'nullable|string',
            'nama_barang' => 'nullable|string',
            'cost_price' => 'nullable|integer',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $vendor_data = Vendor::find($request->vendor_id);
        // dd($vendor_data);
        if (!$vendor_data) {
            return back()->withErrors('Data Vendor tidak ditemukan');
        }

       vendor_barang::create([
        'vendor_id' => $vendor_data->id,
        'kode_barang' => $request->kode_barang,
        'kode_barang_so' =>'So',time(),
        'nama_barang' => $request->nama_barang,
        'satuan' => $request->satuan,
        'cost_price' => $request->cost_price,
        'description' => $request->description,
       ]);

        return back()->with('success', 'Data Barang berhasil diperbarui!');

    }

    public function create()
    {
        $vendors = Vendor::all();
        // dd($vendors);
        return view('createBarang', compact('vendors'));
    }



    /**
     * Display the specified resource.
     */
    public function show(vendor_barang $vendor_barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vendor_barang $vendor_barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vendor_barang $vendor_barang)
    {
        //
    }
}
