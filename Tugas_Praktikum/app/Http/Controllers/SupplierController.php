<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;


class SupplierController extends Controller
{
    /**
     * Display a form for creating a new supplier.
     */
    public function create()
    {
        return view('master-data.supplier.create-supplier'); // Menampilkan form supplier
    }

    /**
     * Store a newly created supplier in storage.
     */
    public function store(Request $request)
    {
        $validasi_data = $request->validate([
            'supplier_name' => 'required|string|max:255',
            'supplier_address' => 'required|string',
            'phone' => 'required|string|max:15',
            'comment' => 'nullable|string',
        ]);

        Supplier::create($validasi_data);
        return redirect('/dashboard')->with('success', 'Product update successfully!');
    }
}
