@extends('admin.layout')

@section('content')
<h1>Product Details</h1>

<p><strong>Name:</strong> {{ $product->name }}</p>
<p><strong>Categori:</strong> {{ $product->category }}</p>
<p><strong>Description:</strong> {{ $product->description }}</p>
<p><strong>Price:</strong> {{ $product->price }}</p>
<p><strong>Stok:</strong> {{ $product->stok }}</p>
<p><strong>Image:</strong></p>
@if($product->image)
    <img src="{{ asset('storage/' . $product->image) }}" width="50px">
@else
    <p>No Image Available</p>
@endif

<a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back to Products List</a>
@endsection