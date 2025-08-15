@extends('layouts.app')

@section('content')
    <div class="container">
        <h3> Detail Mobil </h3>
        <table class="table table-bordered table-striped">
            <tr>
                <th width="25%">Id</th>
                <th width="10px">:</th>
                <td>{{ $mobil->id }}</td>
            </tr>
            <tr>
                <th width="25%">Merek</th>
                <th width="10px">:</th>
                <td>{{ $mobil->merek }}</td>
            </tr>
            <tr>
                <th width="25%">Tipe</th>
                <th width="10px">:</th>
                <td>{{ $mobil->tipe }}</td>
            </tr>
            <tr>
                <th width="25%">Warna</th>
                <th width="10px">:</th>
                <td>{{ $mobil->warna}}</td>
            </tr>
            <tr>
                <th width="25%">Jumlah Roda</th>
                <th width="10px">:</th>
                <td>{{ $mobil->jumlah_roda }}</td>
            </tr>
            <tr>
                <th width="25%">Nomor Mesin</th>
                <th width="10px">:</th>
                <td>{{ $mobil->no_mesin }}</td>
            </tr>
        <tr>
            <th>Gambar</th>
            <td>
                @if($mobil->gambar)
                    <img src="{{ asset('uploads/' . $mobil->gambar) }}" alt="{{ $mobil->merk }}" width="200">
                @else
                    Tidak ada gambar
                @endif
            </td>
        </tr>
    </table>
    <a href="{{ route('mobil.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection