<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customers::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'address'  => 'required|string',
            'province' => 'required|string',
            'city'     => 'required|string',
            'phone'    => 'required|string|max:20',
            'email'    => 'required|email|unique:customers,email',
        ]);

        Customers::create($request->all());

        return redirect()->route('customers.index')->with('success', 'Customers berhasil ditambahkan.');
    }

    public function show(Customers $customer)
    {
        return view('customers.show', compact('customers'));
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customers'));
    }

    public function update(Request $request, Customers $customer)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'address'  => 'required|string',
            'province' => 'required|string',
            'city'     => 'required|string',
            'phone'    => 'required|string|max:20',
            'email'    => 'required|email|unique:customers,email,' . $customer->id,
        ]);

        $customers->update($request->all());

        return redirect()->route('customers.index')->with('success', 'Customers berhasil diperbarui.');
    }

    public function destroy(Customers $customer)
    {
        $customers->delete();
        return redirect()->route('customers.index')->with('success', 'Customers berhasil dihapus.');
    }
}