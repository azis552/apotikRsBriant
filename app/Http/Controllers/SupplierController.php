<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::all();
        $menu = 'Supplier';
        $subMenu = 'Index';
        return view('admin.supplier.index', compact('suppliers', 'menu', 'subMenu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu = 'Supplier';
        $subMenu = 'Create';
        return view('admin.supplier.create', compact('menu', 'subMenu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'perusahaan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        $simpan = Supplier::create($validate);
        if ($simpan) {
            return response()->json(['message' => 'Data Berhasil']);
        }else{
            return response()->json(['message' => 'Data Gagal Disimpan']);
        }

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
