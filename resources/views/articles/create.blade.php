@extends('layouts.app')

@section('content')
    <div class="container">
         <h3>+ Add New Article</h3>

         <div class="row">
         <div class="col-md-12">
         <div class="card card-body">
           <form action="{{ route('articles.store') }}" method="POST">
           
            @csrf
            <div class="form-group mb-3">
                <label for="title" class="form-table">No</label>
                <input type="text" name="no" id="no" class="form-control" />
                @error('no')
                <span class="text danger">{{ $message }}</span>    
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="title" class="form-table">Title</label>
                <input type="text" name="title" id="title" class="form-control" />
                @error('title')
                <span class="text danger">{{ $message }}</span>    
                @enderror
            </div>
                
             <div class="form-group mb-3">
                <label for="slug" class="form-table">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control"/>
                @error('slug')
                <span class="text danger">{{ $message }}</span>    
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="content" class="form-table">Content</label>
                <textarea name="content" id="title" class="form-control"></textarea>
                @error('content')
                <span class="text danger">{{ $message }}</span>    
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="author" class="form-table">Author</label>
                <input type="text" name="author" id="author" class="form-control"/>
                @error('author')
                <span class="text danger">{{ $message }}</span>    
                @enderror
            </div>


                <div class="flex">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ route('articles.index') }}"
                       class="btn btn-secondary">Cancel</a>
                </div>

           </form>
         </div>
        </div>
       </div>
    </div>
@endsection