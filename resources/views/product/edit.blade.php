@extends('layouts.app')

@section('body')
    <h1 class="mn-0">Edit Product</h1>
    <hr>
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}" >    
            </div>    
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" >    
            </div>    
            <div class="col mb-3">
                <label class="form-label">Product_Code</label>
                <input type="text" name="product_code" class="form-control" placeholder="Product_Code" value="{{ $product->product_code }}">    
            </div>  
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <input type="text" name="description" class="form-control" placeholder="Description" value="{{ $product->description }}">    
            </div> 
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">Created At</label> 
                    <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}">      
                </div>
                <div class="col mb-3">
                    <label class="form-label">Updated At</label>
                    <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}">    
                </div>    
            </div> 
            <div class="row">
                <div class="d-grid">
                    <button class="btn btn-warning">Update</button>
                </div>
            </div>
        </div>
    </form>
@endsection