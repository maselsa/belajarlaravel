@extends('layouts.app')

@section('content')
   <div class="container">
      <h3>Categories</h3>

    <a href="{{ route('category.create') }}"
    class="btn btn-primary my-3">
    + Add New Category
    </a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($categories->isEmpty())
            <tr>
                <td colspan="3" class="text-center text muted">Categories is empty.</td>
            </tr>
                
            @endif
            @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>
          <a href="{{ route('category.show', $category->id) }}"> Detail</a>
                   <a href="{{ route('category.edit', $category->id) }}"> Edit</a>
                   <a href="javascript:;"
                        onclick="handleDelete('{{ $category->id }}')"
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
           form.setAttribute('action', '{{ url("/category") }}/' + id);
           form.submit();
       }
    });
        
    }
  </script>
@endpush