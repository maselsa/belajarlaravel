@extends('layouts.app')

@section('content')
       <div class="container">
         <h3>Add Category</h3>
         <a href="{{ route('category.index')}}" class="my-3">Kembali</a>

         <div class="row"></div>
            <div class="col-md-6">
                <div class="card card-body">
                    <form action="{{ route('category.update' , $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                     <div class="form-group mb-3">
                     <label for="name">Name</label>
                     <input type="text" name="name" id="name" value="{{ $category->name }}" class="form-control"/>
                     @error('name')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
                </div>

                <div class="form-group mb-3">
                   <label for="slug">Slug</label>
                   <input type="text" name="slug" id="slug" value="{{ $category->slug }}" class="form-control"/>
                    @error('slug')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
               </div> 
               
               <div class="form-group mb-3">
                   <label for="description">Description</label>
                   <input type="text" name="description" id="umur" value="{{ $category->umur }}" class="form-control"/>
                    @error('description')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
               </div> 

               <button type="submit" class="btn btn-primary"> Simpan</button>
               <button type="reset" class="btn btn-secondary"> Reset</button>
          </form> 
       </div>
       </div>
   </div>
 </div>
@endsection