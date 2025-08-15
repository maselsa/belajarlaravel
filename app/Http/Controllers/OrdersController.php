<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|integer',
            'tax' => 'numeric|min:0',
            'discount' => 'numeric|min:0',
            'amount' => 'numeric|min:0',
        ]);

        Order::create($validated);

        return redirect()->route('orders.index')->with('success', 'Order berhasil ditambahkan.');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'customer_id' => 'required|integer',
            'tax' => 'numeric|min:0',
            'discount' => 'numeric|min:0',
            'amount' => 'numeric|min:0',
        ]);

        $order->update($validated);

        return redirect()->route('orders.index')->with('success', 'Order berhasil diupdate.');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order berhasil dihapus.');
    }
}