@extends('layouts.app')

@section('content')
    <div class="container">
        <h3> Detail Products </h3>
        <table class="table table-bordered table-striped">
            <tr>
                <th width="25%">Id</th>
                <th width="10px">:</th>
                <td>{{ $products->id }}</td>
            </tr>
            <tr>
                <th width="25%">Supplier_Id</th>
                <th width="10px">:</th>
                <td>{{ $products->supplier_id }}</td>
            </tr>
            <tr>
                <th width="25%">Name</th>
                <th width="10px">:</th>
                <td>{{ $products->name }}</td>
            </tr>
            <tr>
                <th width="25%">Images</th>
                <th width="10px">:</th>
                <td>{{ $products->images}}</td>
                
            </tr>
            <tr>
                <th width="25%">Stock</th>
                <th width="10px">:</th>
                <td>{{ $products->stock }}</td>
            </tr>
            <tr>
                <th width="25%">Unit</th>
                <th width="10px">:</th>
                <td>{{ $products->unit }}</td>
            </tr>
            <tr>
                <th width="25%">Price</th>
                <th width="10px">:</th>
                <td>{{ $products->price }}</td>
            </tr>
            <tr>
                <th width="25%">Discount</th>
                <th width="10px">:</th>
                <td>{{ $products->discount }}</td>
            </tr>
            <tr>
                <th width="25%">Description</th>
                <th width="10px">:</th>
                <td>{{ $products->description }}</td>
            </tr>
            <tr>
                <th width="25%">Dibuat Pada</th>
                <th width="10px">:</th>
                <td>{{ $products->updated_at }}</td>
            </tr>
            <tr>
                <th width="25%">Diperbarui</th>
                <th width="10px">:</th>
                <td>{{ $products->created_at }}</td>
            </tr>
        <tr>
            <th>Gambar</th>
            <td>
                @if($products->gambar)
                    <img src="{{ asset('storage/images/' . $products->images) }}" alt="Products Images" style="max-width:150px;">
                @else
                    Tidak ada gambar
                @endif
            </td>
        </tr>
    </table>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
             
    