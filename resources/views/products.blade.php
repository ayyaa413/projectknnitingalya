<!-- resources/views/product.blade.php -->
<div class="product-card">
    <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
    <h5>{{ $product->name }}</h5>
    <p>{{ $product->description }}</p>
    <p>{{ $product->price }}</p>

    <!-- Add to Cart Form -->
    <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <button type="submit" class="btn" style="background-color: #b79e79; color: white;">Add to Cart</button>
    </form>
</div>
