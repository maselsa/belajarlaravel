@extends('layouts.app')

@section('content')
<h3>Add Car Data</h3>
<a href="{{ route('mobil.index')}}" class="my-3">Back</a>

<div class="row">
         <div class="col-md-6">
         <div class="card card-body">
           <form action="{{ route('mobil.store') }}" method="POST">
           
 @csrf

     <div class="form-group mb-3">
        <label class="form-label">Id</label>
        <input type="text" name="id" class="form-control">
        @error('id')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Merek</label>
        <input type="text" name="merek" class="form-control">
        @error('merek')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Tipe</label>
        <input type="text" name="tipe" class="form-control">
        @error('tipe')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Warna</label>
        <input type="text" name="warna" class="form-control">
        @error('warna')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Jumlah Roda</label>
        <input type="number" name="jumlah_roda" class="form-control">
        @error('jumlahroda')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Nomor Mesin</label>
        <input type="text" name="nomor_mesin" class="form-control">
        @error('nomormesin')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Gambar</label>
        <input type="text" name="gambar" class="form-control">
        
        @error('gambar')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>
</div>
</div>
</div>

@endsection