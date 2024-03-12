@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Add Book</h1>
    <hr>
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" placeholder="Title" class="form-control">
            </div>
            <div class="col">
                <input type="text" name="price" placeholder="Price" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" placeholder="Product Code" class="form-control">
            </div>
            <div class="col">
                <textarea name="description" placeholder="Description" class="form-control"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection