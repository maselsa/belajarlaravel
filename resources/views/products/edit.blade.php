@extends('layouts.app')

@section('content')
<h3>Edit Products</h3>
<a href="{{ route('products.index')}}" class="my-3">Back</a>

       <div class="row"></div>
            <div class="col-md-6">
                <div class="card card-body">
                <form action="{{ route('products.store') }}" method="POST">

              @csrf
              @method('PUT')
             <div class="form-group mb-3">
                <label for="id">Id</label>
                <input type="text" name="id" id="id" class="form-control"/>
                @error('id')
                 <span class="text-danger">{{ $message }}</span>
                @enderror
             </div>

             <div class="form-group mb-3">
                <label for="supplier_id">Supplier Id</label>
                <input type="number" name="supplier_id" id="supplier_id" class="form-control"/>
                @error('supplier_id')
                 <span class="text-danger">{{ $message }}</span>
                @enderror
             </div>

             <div class="form-group mb-3">
                <label for="name">IName</label>
                <input type="text" name="name" id="name" class="form-control"/>
                @error('name')
                 <span class="text-danger">{{ $message }}</span>
                @enderror
             </div>

             <div class="form-group mb-3">
                <label for="images">Images</label>
                <input type="url" name="images" id="images" class="form-control"/>
                <img src="{{ asset('storage/images/' . $products->images) }}" alt="Products Images" style="max-width:150px;"">
                @error('images')
                 <span class="text-danger">{{ $message }}</span>
                @enderror
             </div>

             <div class="form-group mb-3">
                <label for="stock">Stock</label>
                <input type="number" name="stock" id="stock" class="form-control"/>
                @error('stock')
                 <span class="text-danger">{{ $message }}</span>
                @enderror
             </div>

             <div class="form-group mb-3">
                <label for="unit">Unit</label>
                <input type="text" name="unit" id="unit" class="form-control"/>
                @error('unit')
                 <span class="text-danger">{{ $message }}</span>
                @enderror
             </div>

             <div class="form-group mb-3">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control"/>
                @error('price')
                 <span class="text-danger">{{ $message }}</span>
                @enderror
             </div>

             <div class="form-group mb-3">
                <label for="id">Id</label>
                <input type="text" name="id" id="id" class="form-control"/>
                @error('id')
                 <span class="text-danger">{{ $message }}</span>
                @enderror
             </div>

             <div class="form-group mb-3">
                <label for="discount">Discount</label>
                <input type="number" name="discount" id="discount" class="form-control"/>
                @error('discount')
                 <span class="text-danger">{{ $message }}</span>
                @enderror
             </div>

             <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
                @error('description')
                 <span class="text-danger">{{ $message }}</span>
                @enderror
             </div>

               <button type="submit" class="btn btn-primary"> Save</button>
               <button type="reset" class="btn btn-secondary"> Reset</button>
          </form> 
       </div>
     </div>
   </div>
 </div>
@endsection