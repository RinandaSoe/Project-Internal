<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class vendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $vendors = Vendor::all();
        // return view('create', ['data' => $vendors]);
        return view('createVendor');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'npwp' => 'nullable|string|max:255',
            'alamat' => 'nullable|string'
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        Vendor::create([
            'name' => $request->name,
            'npwp' => $request->npwp,
            'alamat' => $request->alamat,
            'total_pembelian' => 0,
        ]);
        
        return back()->with('success', 'Data saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $vendor = Vendor::find($id);

        return view('vendor', compact('vendor'));

    }

}
