@extends('layouts.app') 

@section('content')
<div class="container mt-3">
    <h3>Add Suppliers</h3>
    <a href="{{ route('suppliers.index') }}" class="my-3">Back</a>

    <div class="row"></div>
       <div class="col-md-6">
         <div class="card card-body">
    <form action="{{ route('suppliers.store') }}" method="POST">
        @csrf

         <div class="form-group mb-3">
            <label class="form-label">Id</label>
            <input type="text" name="id" class="form-control">
            @error('id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea name="address" class="form-control"></textarea>
            @error('address')
                 <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Province</label>
            <input type="text" name="province" class="form-control">
            @error('province')
                 <span class="text-danger">{{ $message }}</span>
             @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">City</label>
            <input type="text" name="city" class="form-control">
            @error('city')
                    <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Postcode</label>
            <input type="text" name="postcode" class="form-control">
            @error('postcode')
                    <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control">
            @error('phone')
                    <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

         <div class="mb-3">
            <label class="form-label">Fax</label>
            <input type="text" name="fax" class="form-control">
            @error('fax')
                    <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Save</button>
        <button type="submit" class="btn btn-secondary">Back</button>
    </form>
</div>
</div>
</div>

@endsection