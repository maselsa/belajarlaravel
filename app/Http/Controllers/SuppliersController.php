<?php

namespace App\Http\Controllers;
use App\Models\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function index()
    {
        $suppliers = Suppliers::all();
        return view('suppliers.index', compact('suppliers'));
    }

    public function create()
    {
        $suppliers = Suppliers::all();
        return view('suppliers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'address' => 'nullable|string',
            'province' => 'nullable|string|max:100',
            'city' => 'nullable|string|max:100',
            'postcode' => 'nullable|string|max:20',
            'phone' => 'nullable|string|max:30',
            'fax' => 'nullable|string|max:30',
        ]);

        Suppliers::create($validated);
        return redirect()->route('suppliers.index')->with('success', 'Supplier berhasil ditambahkan.');
    }

    public function show(Suppliers $supplier)
    {
        $suppliers = Suppliers::all();
        return view('suppliers.show', compact('supplier'));
    }

    public function edit($id)
    {
        $suppliers = Suppliers::findOrFail($id);
        return view('suppliers.edit', compact('supplier'));
    }

    public function update(Request $request, Suppliers $supplier, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'address' => 'nullable|string',
            'province' => 'nullable|string|max:100',
            'city' => 'nullable|string|max:100',
            'postcode' => 'nullable|string|max:20',
            'phone' => 'nullable|string|max:30',
            'fax' => 'nullable|string|max:30',
        ]);

        $suppliers = Suppliers::findOrFail($id);
        $suppliers->update($request->all());
        return redirect()->route('suppliers.index')->with('success', 'Suppliers berhasil diperbarui.');
    }

    public function destroy()
    {
        $suppliers = Suppliers::find()->delete();
        return redirect()->back();
    }
}
