@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0 d-flex">Product</h1>
        <a href="{{ route('product.create') }}" class="btn btn-primary">Add product</a>
    </div>
    <hr>
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Price</th>
                <th>Product Code</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($product->count() > 0)
                @foreach ($product as $products)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $products->title }}</td>
                        <td class="align-middle">{{ $products->price }}</td>
                        <td class="align-middle">{{ $products->product_code }}</td>
                        <td class="align-middle">{{ $products->description }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="" class="btn btn-secondary">Detail</a>
                                <a href="" class="btn btn-warning">Edit</a>
                                <button class="btn btn-danger m-0">Delete</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">PRODUCT NOT FOUND!!!</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
