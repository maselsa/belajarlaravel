@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Add New Category</h3>

        <div class="row">
            <div class="col-md-6">
                 <div class="card card-body">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" />
                            @error('name')
                                 <span class="text-denger">{{ $message }}</span>
                            @enderror     
                        </div>
                        <div class="form-group">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" />
                            @error('slug')
                                 <span class="text-denger">{{ $message }}</span>
                            @enderror     
                        </div>
                        <div class="form-group">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" name="description" id="description" class="form-control" />
                            @error('description')
                                 <span class="text-denger">{{ $message }}</span>
                            @enderror     
                        </div>

                        <div class='flex'>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('category.index') }}" class="btn btn-secondary">
                            Cancel
                        </a>
                        </div>

 
                </form>

            </div>

        </div>

    </div>
@endsection   