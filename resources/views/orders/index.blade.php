@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Orders</h1>
    <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Tambah Order</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer ID</th>
                <th>Tax</th>
                <th>Discount</th>
                <th>Amount</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->customer_id }}</td>
                <td>{{ $order->tax }}</td>
                <td>{{ $order->discount }}</td>
                <td>{{ $order->amount }}</td>
                <td>
                    <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection