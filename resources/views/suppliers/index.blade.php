@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Daftar Suppliers</h3>
    <a href="{{ route('suppliers.create') }}" class="btn btn-primary mb-3">
       + Add New Supplier
    </a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Address</th>
                <th>Province</th>
                <th>City</th>
                <th>Postcode</th>
                <th>Phone</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $supplier)
            <tr>
                <td>{{ $supplier->no }}</td>
                <td>{{ $supplier->name }}</td>
                <td>{{ $supplier->address }}</td>
                <td>{{ $supplier->city }}</td>
                <td>{{ $supplier->province }}</td>
                <td>{{ $supplier->postcode }}</td>
                <td>{{ $supplier->phone }}</td>
                <td>
                
         <a href="{{ route('suppliers.show', $supplier->id) }}"> Detail</a>
                   <a href="{{ route('suppliers.edit', $supplier->id) }}"> Edit</a>
                   <a href="javascript:;"
                        onclick="handleDelete('{{ $supplier->id }}')"
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
           form.setAttribute('action', '{{ url("/suppliers") }}/' + id);
           form.submit();
       }
    });
        
    }
  </script>
@endpush