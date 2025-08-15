@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Date Car</h3>
    <a href="{{ route('mobil.create') }}" class="btn btn-primary mb-3">
       + Add Car
    </a>

    <table class="table table-striped">
        <thead>
            <tr>
               <th>Id</th>
               <th>Merek</th>
               <th>Tipe</th>
               <th>Warna</th>
               <th>Jumlah Roda</th>
               <th>Nomor Mesin</th>
               <th>Gambar</th>
               <th width="150">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mobil as $mobil)
            <tr>

            <td>{{ $mobil->id }}</td>
            <td>{{ $mobil->merek }}</td>
            <td>{{ $mobil->tipe }}</td>
            <td>{{ $mobil->warna }}</td>
            <td>{{ $mobil->jumlah_roda }}</td>
            <td>{{ $mobil->nomor_mesin }}</td>
            <td>{{ $mobil->gambar }}</td>
                  
        <td>
          <a href="{{ route('mobil.show', $mobil->id) }}"> Detail</a>
                   <a href="{{ route('mobil.edit', $mobil->id) }}"> Edit</a>
                   <a href="javascript:;"
                        onclick="handleDelete('{{ $mobil->id }}')"
                        class='text-danger'
                        >Delete</a>
                </td>
            </tr>
        @endforeach
     </tbody>
    </table>
</div>

   <form action="" id="form-delete" method="POST">
    @csrf
    @method('DELETE')
</form>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript"> 
    function handleDelete(id) {
        Swal.fire({
           title: "Apakah kamu yakin?",
           text: "Data yang dihapus tidak bisa dikembalikan",
           icon: "warning",
           showCancelButton: true,
           confirmButtonColor: "#dc3545",
           cancelButtonColor: "#343a40",
           confirmButtonText: "Ya, Hapus!",
           cancelButtonText:"Batal"
    }).then((result) => {
        if (result.isConfirmed) {
           var form = document.getElementById('form-delete');
           form.setAttribute('action', '{{ url("/mobil") }}/' + id);
           form.submit();
       }
    });
        
    }
  </script>
@endpush