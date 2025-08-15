@extends('layouts.app')

@section('content')
       <div class="container">
         <h3>Edit Suppliers</h3>
         <a href="{{ route('suppliers.index')}}" class="my-3">Back</a>

         <div class="row"></div>
            <div class="col-md-6">
                <div class="card card-body">
                    <form action="{{ route('suppliers.update' , $supplier->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                     <div class="form-group mb-3">
                     <label for="id">ID</label>
                     <input type="text" name="id" id="id" value="{{ $supplier->id }}" class="form-control"/>
                     @error('id')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
                </div>

                <div class="form-group mb-3">
                   <label for="name">Name</label>
                   <input type="text" name="name" id="name" value="{{ $supplier->name }}" class="form-control"/>
                    @error('name')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
               </div> 
               
               <div class="form-group mb-3">
                   <label for="address">Address</label>
                   <textarea name="address" id="address" class="form-control">{{ $supplier->address }}</textarea>
                    @error('address')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
               </div> 

               <div class="form-group mb-3">
                  <label for="province">province</label>
                  <input type="text" name="province" id="prvince" value="{{ $supplier->province }}" class="form-control"/>
                   @error('province')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
               </div>

               <div class="form-group mb-3">
                  <label for="city">city</label>
                 <input type="text" name="city" id="city" value="{{ $supplier->city }}" class="form-control"/>
                   @error('city')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
               </div>

               <div class="form-group mb-3">
                  <label for="postcode">postcode</label>
                  <input type="text" name="postcode" id="postcode" value="{{ $supplier->postcode }}" class="form-control"/>
                   @error('postcode')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
               </div>

               <div class="form-group mb-3">
                  <label for="phone">phone</label>
                  <input type="text" name="phone" id="phone" value="{{ $supplier->phone }}" class="form-control"/>
                   @error('phone')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
               </div>

               <div class="form-group mb-3">
                  <label for="fax">fax</label>
                  <input type="text" name="fax" id="fax" value="{{ $supplier->fax }}" class="form-control"/>
                   @error('fax')
                          <span class="text-danger">{{ $message }}</span>
                     @enderror
               </div>


               
               <button type="submit" class="btn btn-primary"> Save</button>
               <button type="reset" class="btn btn-secondary"> Back</button>
          </form> 
       </div>
       </div>
   </div>
 </div>
@endsection