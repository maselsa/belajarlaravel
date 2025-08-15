@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Order</h1>

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Customer ID</label>
            <input type="number" name="customer_id" class="form-control" value="{{ $order->customer_id }}" required>
        </div>
        <div class="mb-3">
            <label>Tax</label>
            <input type="number" step="0.01" name="tax" class="form-control" value="{{ $order->tax }}">
        </div>
        <div class="mb-3">
            <label>Discount</label>
            <input type="number" step="0.01" name="discount" class="form-control" value="{{ $order->discount }}">
        </div>
        <div class="mb-3">
            <label>Amount</label>
            <input type="number" step="0.01" name="amount" class="form-control" value="{{ $order->amount }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection