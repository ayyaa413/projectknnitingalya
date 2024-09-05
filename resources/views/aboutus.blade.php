<!DOCTYPE html>
<html lang="en">
<head>
  <title>Knniting shop alya</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
  .fakeimg {  
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>


<div class="p-5 text-white text-center" style="background-color: #b79e79;">
  <h1>KNNITED CARDIGAN VIK'S</h1>
  <p>WELCOME GIRL'S</p> 
</div>

<nav class="navbar navbar-expand-sm" style="margin-top: 0%; background-color: #d7bd96;"> 
  <div class="container-fluid" style="align-items: center;" style="margin-left: 10%">
  
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-link nav-link" style="color: white;">LOGOUT</button>
      </form>     
    </ul>   
    <ul class="navbar-nav" style="margin-left: 1%;">
      <li class="nav-item">
        <a class="nav-link" href="/home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="/aboutus">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/kategorihome">Kategori</a>
      </li>    </ul>
    <button class="btn fas fa-shopping-cart" type="submit" style="background-color: #b79e79; margin-left: -0%" onclick="window.location.href='/cart'">CART</button>
</nav>
</div>
</div>
    </div>
  </nav>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-4 text-center">
      <div class="about-content">
        <h2>Meningkatkan Visibilitas Online:</h2>
        <p>Dengan memiliki website, toko kardigan dapat lebih mudah ditemukan oleh pelanggan yang mencari produk terkait secara online. Website ini akan membantu memperluas jangkauan pasar dari hanya lokal ke skala yang lebih luas, bahkan global.</p>
      </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="about-content">
        <h2>Menyediakan Informasi Produk: </h2>
        <p>Website memungkinkan toko untuk menampilkan koleksi kardigan secara lengkap, termasuk deskripsi produk, harga, bahan, ukuran, dan gambar. Ini memudahkan pelanggan untuk mendapatkan informasi yang dibutuhkan sebelum melakukan pembelian.</p>
      </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="about-content">
        <h2>Story</h2>
        <p>Didirikan pada tahun 2024, Toko Rajut Alya lahir dari kecintaan terhadap merajut dan keinginan untuk berbagi semangat tersebut dengan dunia..</p>
      </div>
    </div>
  </div>
</div>
<footer class="text-light py-3" style="background-color: #b79e79; width: 100vw;">
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
              <p><i class="fas fa-home mr-3"></i> Jl.Sentral</p>
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
      <div class="row d-flex justify-content-center">
          <div class="col-md-7 col-lg-8">
              <p class="text-center">© 2024 Hak Cipta: <a href="#" class="text-warning">Nama Perusahaan</a></p>
          </div>
      </div>
  </div>
</footer>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
