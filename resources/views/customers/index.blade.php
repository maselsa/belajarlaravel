@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Customers</h3>
    <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">
       + Add Customers
    </a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Provinsi</th>
                <th>Kota</th>
                <th>Telepon</th>
                <th>Email</th>
                <th width="180px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($customers as $customer)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->province }}</td>
                <td>{{ $customer->city }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->email }}</td>
                <td>
                    <a href="{{ route('customers.show', $customer->id) }}"> Detail</a>
                   <a href="{{ route('customers.edit', $customer->id) }}"> Edit</a>
                   <a href="javascript:;"
                        onclick="handleDelete('{{ $customer->id }}')"
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
           form.setAttribute('action', '{{ url("/customers") }}/' + id);
           form.submit();
       }
    });
        
    }
  </script>
@endpush