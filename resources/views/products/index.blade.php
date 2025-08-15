@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Product List</h3>
     <a href="{{ route('products.create') }}" class="btn btn-primary my-3">
       + Add New Products
    </a>
     <table class="table table-bordered table-striped
     text-center align-middle">
  <thead>
    <tr>
        <th>ID</th>
        <th>Supplier Id</th>
        <th>Name</th>
        <th>Image</th>
        <th>Stock</th>
        <th>Unit</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
   </thead>
   <tbody>
    @foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->supplier_id }}</td>
        <td>{{ $product->name }}</td>
        <td>
            @if($product->images)
                <img src="{{ asset('storage/images/' . $product->images) }}" alt="{{ $product->name }}" width="80">
            @else
                No Image
            @endif

        </td>
        <td>{{ $product->stock }}</td>
        <td>{{ $product->unit }}</td>
        <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
        <td>{{ $product->discount }}%</td>
        <td>{{ \Illuminate\Support\Str::limit($product->description, 50) }}</td>
        <td>

            <a href="{{ route('products.show', $product->id) }}">Detail</a> |
            <a href="{{ route('products.edit', $product->id) }}">Edit</a> |
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-denger btn-sm" 
                onclick="return confirm('Delete?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
     </tbody>
  </table>
</div>
@endsection