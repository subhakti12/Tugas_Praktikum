<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product'); // Mengarahkan ke product.blade.php
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create'); // Tampilkan form untuk membuat produk baru
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Simpan produk baru
        // Misalnya, validasi dan simpan data ke database
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Tampilkan detail produk berdasarkan ID
        // Misalnya, cari produk berdasarkan ID dan kirim ke view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Tampilkan form untuk mengedit produk berdasarkan ID
        // Misalnya, cari produk berdasarkan ID dan kirim ke view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Update produk berdasarkan ID
        // Misalnya, validasi dan update data di database
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Hapus produk berdasarkan ID
        // Misalnya, cari produk berdasarkan ID dan hapus dari database
    }

    public function home()
    {
        return view('home'); // Mengarahkan ke home.blade.php
    }

    public function app()
    {
        return view('app'); // Mengarahkan ke app.blade.php
    }
}
