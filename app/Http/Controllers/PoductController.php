<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use Route;

Route::get('/product', [PoductController::class, 'index']);
Route::get('/product/create', [PoductController::class, 'create']);
Route::post('/product', [PoductController::class, 'store']);
Route::get('/product/{id}', [PoductController::class, 'show']);
Route::get('/product/{id}/edit', [PoductController::class, 'edit']);
Route::put('/product/{id}', [PoductController::class, 'update']);
Route::delete('/product/{id}', [PoductController::class, 'destroy']);

class PoductController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
