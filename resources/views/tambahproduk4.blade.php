

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Detail Produk - Knitting Shop Alya</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .product-detail {
            margin-top: 5%;
        }
        .product-img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .btn-custom {
            background-color: #b79e79;
            color: white;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #8c725c;
            color: white;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-sm" style="background-color: #d7bd96;">
    <div class="container-fluid">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <button class="btn fas fa-shopping-cart" type="button" style="background-color: #f1ede7;" onclick="window.location.href='/cart'">Cart</button>
            </li>
        </ul>
        <ul class="navbar-nav" style="margin-left: 70%;">
            <li class="nav-item">
                <a class="nav-link active" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kategori</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container product-detail">
    <div class="row">
        <div class="col-md-6">
            <!-- Gambar Produk -->
            <img src="https://i.pinimg.com/564x/38/d1/8b/38d18b36b017adac57707c199a559a7f.jpg" alt="Pink Roses Cardigan" class="product-img">
        </div>
        <div class="col-md-6">
            <!-- Detail Produk -->
            <h3>Heart Cardigan</h3>
            <p class="text-muted">Kategori: Pakaian Rajut Wanita</p>
            <p class="text-muted">Ketersediaan: Tersedia</p>
            <h4 class="product-price">Rp.199.000</h4>
            <p>Kardigan seni tebal dan lembut ini dirancang dengan cermat dari campuran wol. Pola mawar di atasnya.</p>

            <!-- Tombol Add to Cart & Buy Now -->
            <div class="mt-4">
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="1">
                    <input type="number" name="quantity" value="1" min="1" class="form-control mb-3" style="width: 100px;">
                    <button type="submit" class="btn btn-custom me-2"><i class="fas fa-shopping-cart"></i> Tambah ke Keranjang</button>
                    <a href="#" class="btn btn-custom"><i class="fas fa-bolt"></i> Beli Sekarang</a>
                </form>
            </div>

            <!-- Informasi Tambahan Produk -->
            <hr>
            <h5>Detail Produk:</h5>
            <ul>
                <li>Bahan: Wol</li>
                <li>Warna: Merah Jambu</li>
                <li>Ukuran: S, M, L, XL</li>
            </ul>
        </div>
    </div>
</div>

<!-- Tambahan notifikasi -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>



<footer class="text-light py-3" style="background-color: #b79e79;" style="margin-top: 20px">
    <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
            <!-- Kolom 1 -->
            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">KNNITED CARDIGAN VIK'S</h5>
                <p>Perusahaan Cardigan Menyediakan berbagai macam pakaian rajut yang lucu</p>
            </div>
            <!-- Kolom 2 -->
            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Kontak</h5>
                <p><i class="fas fa-home mr-3"></i> Jl. Sentral</p>
                <p><i class="fas fa-envelope mr-3"></i> alyadevika@gmail.com</p>
                <p><i class="fas fa-phone mr-3"></i> 082138484930</p>
            </div>
            <!-- Kolom 3 -->
            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Ikuti Kami</h5>
                <a href="#" class="btn btn-outline-light btn-floating m-1" role="button"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="btn btn-outline-light btn-floating m-1" role="button"><i class="fab fa-twitter"></i></a>
                <a href="#" class="btn btn-outline-light btn-floating m-1" role="button"><i class="fab fa-instagram"></i></a>
                <a href="#" class="btn btn-outline-light btn-floating m-1" role="button"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>

        <hr class="my-3">

        <!-- Copyright -->
        <div class="row d-flex justify-content-center">
            <div class="col-md-7 col-lg-8">
                <p class="text-center">© 2024 Hak Cipta: <a href="#" class="text-warning">Nama Perusahaan</a></p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>