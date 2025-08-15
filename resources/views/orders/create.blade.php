@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Add Orders</h3>
    <a href="{{ route('orders.index')}}" class="my-3">Back</a>

       <div class="row"></div>
            <div class="col-md-6">
                <div class="card card-body">

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
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
               <button type="reset" class="btn btn-secondary"> Reset</button>
    </form>
</div>
</div>
</div>
</div>
@endsection