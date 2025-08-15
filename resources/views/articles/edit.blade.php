@extends('layouts.app')

@section('content')
       <div class="container">
         <h3>Edit Articles</h3>
         <a href="{{ route('articles.index')}}" class="my-3">Back</a>

         <div class="row"></div>
            <div class="col-md-6">
                <div class="card card-body">
                    <form action="{{ route('articles.update' , $articles->id) }}" method="POST">
                    @csrf
                    @method('PUT')

             <div class="form-group mb-3">
                <label for="title" class="form-table">No</label>
                <label for="text" name="no" id="no" class="form-control">No</label>
                @error('no')
                <span class="text danger">{{ $message }}</span>    
                @enderror
            </div>
                   
            <div class="form-group mb-3">
                <label for="title" class="form-table">Title</label>
                <label for="text" name="title" id="title" class="form-control">Title</label>
                @error('title')
                <span class="text danger">{{ $message }}</span>    
                @enderror
            </div>

                 
            <div class="form-group mb-3">
                <label for="slug" class="form-table">Slug</label>
                <label for="text" name="slug" id="slug" class="form-control">Slug</label>
                @error('slug')
                <span class="text danger">{{ $message }}</span>    
                @enderror
            </div>

                 
            <div class="form-group mb-3">
                <label for="content" class="form-table">Content</label>
                <textarea id="title" class="form-control">Content ></textarea>
                @error('content')
                <span class="text danger">{{ $message }}</span>    
                @enderror
            </div>

                
            <div class="form-group mb-3">
                <label for="author" class="form-table">Author</label>
                <label for="text" name="author" id="author" class="form-control">Author</label>
                @error('author')
                <span class="text danger">{{ $message }}</span>    
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