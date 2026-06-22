<?php

namespace App\Http\Controllers;

use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::withCount('barangs')->orderBy('id')->get();
        return view('supplier', compact('suppliers'));
    }
}
