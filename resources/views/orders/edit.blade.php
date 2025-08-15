@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Orders</h3>

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label>Customer ID</label>
            <input type="number" name="customer_id" class="form-control" required>
             @error('customer_id')
                 <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>
        <div class="form-group mb-3">
            <label>Tax</label>
            <input type="number" step="0.01" name="tax" class="form-control" value="0">
             @error('tax')
                 <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>
        <div class="form-group mb-3">
            <label>Discount</label>
            <input type="number" step="0.01" name="discount" class="form-control" value="0">
             @error('discount')
                 <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>
        <div class="mb-3">
            <label>Amount</label>
            <input type="number" step="0.01" name="amount" class="form-control" required>
             @error('amount')
                 <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>
         <button type="submit" class="btn btn-primary"> Save</button>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection