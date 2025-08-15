@extends('layouts.app')

@section('content')
    <div class="container">
        <h3> Detail Siswa </h3>
        <table class="table table-bordered table-striped">
            <tr>
                <th width="25%">NIS</th>
                <th width="10px">:</th>
                <td>{{ $siswa->nis }}</td>
            </tr>
            <tr>
                <th width="25%">Nama</th>
                <th width="10px">:</th>
                <td>{{ $siswa->nama }}</td>
            </tr>
            <tr>
                <th width="25%">Umur</th>
                <th width="10px">:</th>
                <td>{{ $siswa->umur }}</td>
            </tr>
            <tr>
                <th width="25%">Jenis Kelamin</th>
                <th width="10px">:</th>
                <td>{{ $siswa->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan'}}</td>
            </tr>
            <tr>
                <th width="25%">Tanggal Lahir</th>
                <th width="10px">:</th>
                <td>{{ $siswa->tanggal_lahir}}</td>
            </tr>
            <tr>
                <th width="25%">Alamat</th>
                <th width="10px">:</th>
                <td>{{ $siswa->alamat }}</td>
            </tr>
            <tr>
                <th width="25%">Nomor Telepon</th>
                <th width="10px">:</th>
                <td>{{ $siswa->no_telp }}</td>
            </tr>
            <tr>
                <th width="25%">Dibuat Pada</th>
                <th width="10px">:</th>
                <td>{{ $siswa->updated_at }}</td>
            </tr>
            <tr>
                <th width="25%">Diperbarui</th>
                <th width="10px">:</th>
                <td>{{ $siswa->created_at }}</td>
            </tr>
        </table>
             
    </div>
@endsection