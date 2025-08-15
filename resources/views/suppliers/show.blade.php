@extends('layouts.app')

@section('content')
    <div class="container">
        <h3> Detail Suppliers </h3>
        <table class="table table-bordered table-striped">
            <tr>
                <th width="25%">Id</th>
                <th width="10px">:</th>
                <td>{{ $supplier->id }}</td>
            </tr>
            <tr>
                <th width="25%">Name</th>
                <th width="10px">:</th>
                <td>{{ $supplier->name }}</td>
            </tr>
            <tr>
                <th width="25%">Address</th>
                <th width="10px">:</th>
                <td>{{ $supplier->adderss }}</td>
            </tr>
            <tr>
                <th width="25%">Province</th>
                <th width="10px">:</th>
                <td>{{ $supplier->province }}</td>
            </tr>
            <tr>
                <th width="25%">City</th>
                <th width="10px">:</th>
                <td>{{ $supplier->city}}</td>
            </tr>
            <tr>
                <th width="25%">Postcode</th>
                <th width="10px">:</th>
                <td>{{ $supplier->postcode }}</td>
            </tr>
            <tr>
                <th width="25%">Phone</th>
                <th width="10px">:</th>
                <td>{{ $supplier->phone }}</td>
            </tr>
            <tr>
                <th width="25%">Fax</th>
                <th width="10px">:</th>
                <td>{{ $supplier->fax }}</td>
            </tr>
            <tr>
                <th width="25%">Dibuat</th>
                <th width="10px">:</th>
                <td>{{ $supplier->updated_at }}</td>
            </tr>
            <tr>
                <th width="25%">Diperbarui</th>
                <th width="10px">:</th>
                <td>{{ $supplier->created_at }}</td>
            </tr>
        </table>
             
    </div>
@endsection