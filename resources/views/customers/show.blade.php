@extends('layouts.app')

@section('content')
    <div class="container">
        <h3> Detail Customers </h3>
        <table class="table table-bordered table-striped">
         <tbody>
            <tr>
                <th width="25%">Name</th>
                <th width="10px">:</th>
                <td>{{ $customers->name }}</td>
            </tr>
            <tr>
                <th width="25%">Address</th>
                <th width="10px">:</th>
                <td>{{ $customers->address }}</td>
            </tr>
            <tr>
                <th width="25%">Province</th>
                <th width="10px">:</th>
                <td>{{ $customers->province }}</td>
            </tr>
            <tr>
                <th width="25%">City</th>
                <th width="10px">:</th>
                <td>{{ $customers->city }}</td>
            </tr>
            <tr>
                <th width="25%">Province</th>
                <th width="10px">:</th>
                <td>{{ $customers->province }}</td>
            </tr>
            <tr>
                <th width="25%">Phone</th>
                <th width="10px">:</th>
                <td>{{ $customers->phone }}</td>
            </tr>
            <tr>
                <th width="25%">Email</th>
                <th width="10px">:</th>
                <td>{{ $customers->email }}</td>
            </tr>
            <tr>
                <th width="25%">Dibuat Pada</th>
                <th width="10px">:</th>
                <td>{{ $customers->updated_at }}</td>
            </tr>
            <tr>
                <th width="25%">Diperbarui</th>
                <th width="10px">:</th>
                <td>{{ $customers->created_at }}</td>
            </tr>
           </tbody>
        </table>

        <div class="mt-3">
            <a href="{{ route('customers.index') }}" class="btn btn-primary">Back</a>
            <a href="{{ route('customers.edit', $customers->id) }}" class="btn btn-secondary">Edit</a>
        </div>
             
    </div>
@endsection