@extends('layouts.app')

@section('content')
       <div class="container">
         <h3>Edit Customers</h3>
         <a href="{{ route('customers.index')}}" class="my-3">Back</a>

         <div class="row"></div>
            <div class="col-md-6">
                <div class="card card-body">

    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="form-group mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name">
            @error('name')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
        </div>
        <div class="form-group mb-3">
            <label>Address</label>
            <textarea name="address" class="form-control" placeholder="Address"></textarea>
            @error('address')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
        </div>
        <div class="form-group mb-3">
            <label>Province</label>
            <input type="text" name="province" class="form-control" placeholder="Province">
            @error('province')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
        </div>
        <div class="form-group mb-3">
            <label>City</label>
            <input type="text" name="city" class="form-control" placeholder="City">
            @error('city')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
        </div>
        <div class="form-group mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="Phone">
            @error('phone')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
        </div>
        <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email">
            @error('email')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('customers.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection