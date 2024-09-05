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
        <a class="nav-link" href="#">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="/kategorihome">Kategori</a>
      </li>    </ul>
    <button class="btn fas fa-shopping-cart" type="submit" style="background-color: #b79e79; margin-left: -0%" onclick="window.location.href='/cart'">CART</button>
</nav>
</div>
</div>
    </div>
  </nav>
  <div class="container mt-5">
    <h1 class="text-center mb-4">ALL CARDIGAN</h1>
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card product-card">
                <img src="https://i.pinimg.com/564x/8e/1d/ae/8e1daee5612cb2cf10e853dba13b864b.jpg" alt="Product 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Pink Roses Cardigan</h5>
                    <p class="card-text">Kardigan seni tebal dan lembut ini dirancang dengan cermat dari campuran wol. Pola mawar di atasnya.</p>
                    <div class="product-rating mb-2">
                      <i class="fas fa-star" style="color: #ffc107;"></i>
                      <i class="fas fa-star" style="color: #ffc107;"></i>
                      <i class="fas fa-star" style="color: #ffc107;"></i>
                      <i class="fas fa-star" style="color: #ffc107;"></i>
                      <i class="fas fa-star" style="color: #ffc107;"></i>
                  </div>
                    <p class="product-price">Rp.199.000</p>
                        @csrf
                        <input type="hidden" name="product_id" value="1">
                        <a href="tambahproduk" class="btn" style="background-color: #b79e79; color: white;">Buy Now</a>
                      </form>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
    <div class="card product-card">
        <img src="https://i.pinimg.com/564x/e1/2b/c6/e12bc611340bbeaa0368dc26e42e8bcc.jpg" alt="Product 2">
        <div class="card-body text-center">
            <h5 class="card-title">Blueberry Knit Cardigan</h5>
            <p class="card-text">Kardigan seni tebal dan lembut yang dirancang dengan cermat ini terbuat dari campuran wol, pola bluberry di atasnya.</p>
            <div class="product-rating mb-2">
              <i class="fas fa-star" style="color: #ffc107;"></i>
              <i class="fas fa-star" style="color: #ffc107;"></i>
              <i class="fas fa-star" style="color: #ffc107;"></i>
              <i class="fas fa-star" style="color: #ffc107;"></i>
              <i class="fas fa-star-half-alt" style="color: #ffc107;"></i>
            </div>
            <p class="product-price">Rp.199.000</p>
            <a href="/tambahproduk3" class="btn" style="background-color: #b79e79; color: white;">Buy Now</a>
        </div>
    </div>
</div>
<div class="col-md-3 mb-4">
  <div class="card product-card">
      <img src="https://i.pinimg.com/564x/38/d1/8b/38d18b36b017adac57707c199a559a7f.jpg" alt="Product 3">
      <div class="card-body text-center">
          <h5 class="card-title">Heart Cardigan</h5>
          <p class="card-text">Kardigan crop top lucu yang dirancang dengan woll tebal dan lembut dengan tema love love yang super cute.
          </p>
           <div class="product-rating">
            <i class="fas fa-star" style="color: #ffc107;"></i>
            <i class="fas fa-star" style="color: #ffc107;"></i>
            <i class="fas fa-star" style="color: #ffc107;"></i>
            <i class="fas fa-star" style="color: #ffc107;"></i>
            <i class="far fa-star" style="color: #ffc107;"></i>
        </div>
          <p class="product-price">Rp.150.000</p>
          <a href="tambahproduk4" class="btn" style="background-color: #b79e79; color: white;">Buy Now</a>
        </div>
  </div>
</div>
<div class="col-md-3 mb-4">
<div class="card product-card">
    <img src="https://i.pinimg.com/564x/07/c4/1c/07c41c467f69c92824541f58a33b9721.jpg" alt="Product 4">
    <div class="card-body text-center">
        <h5 class="card-title">Yellow Stawberry Cardigan</h5>
        <p class="card-text">kardigan tebal dan lucu dengan warna kuning soft dan stawberry bungga.</p>
        <div class="product-rating mb-2">
          <i class="fas fa-star" style="color: #ffc107;"></i>
          <i class="fas fa-star" style="color: #ffc107;"></i>
          <i class="fas fa-star" style="color: #ffc107;"></i>
          <i class="fas fa-star" style="color: #ffc107;"></i>
          <i class="fas fa-star" style="color: #ffc107;"></i>
      </div>
        <p class="product-price">Rp.100.000</p>
        <a href="#" class="btn" style="background-color: #b79e79; color: white;">Buy Now</a>
      </div>
</div>
</div>
</div>
</div>
<div class="container mt-5">
  <h1 class="text-center mb-4">BAJU SETELAN</h1>
  <div class="row">
      <!-- Product Card 1 -->
      <div class="col-md-3 mb-4">
          <div class="card product-card">
              <img src="https://i.pinimg.com/474x/62/6c/41/626c4130912f09f254fb2c258279b1a0.jpg" alt="Product 1">
              <div class="card-body text-center">
                  <h5 class="card-title">Baju Setelan Lucu</h5>
                  <p class="product-price">Rp.199.000</p>
                  <div class="product-rating mb-2">
                    <i class="fas fa-star" style="color: #ffc107;"></i>
                    <i class="fas fa-star" style="color: #ffc107;"></i>
                    <i class="fas fa-star" style="color: #ffc107;"></i>
                    <i class="fas fa-star" style="color: #ffc107;"></i>
                    <i class="fas fa-star" style="color: #ffc107;"></i>
                </div>
                  <a href="/tambahproduk2" class="btn" style="background-color: #b79e79; color: white;">Buy Now</a>
                </div>
          </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card product-card">
            <img src="https://i.pinimg.com/originals/8f/2a/60/8f2a60acffbf71ab6f93f30ec97bfdd9.jpg" alt="Product 2">
            <div class="card-body text-center">
                <h5 class="card-title">Blueberry Knit Cardigan</h5>
                <p class="product-price">Rp.199.000</p>
                <div class="product-rating mb-2">
                  <i class="fas fa-star" style="color: #ffc107;"></i>
                  <i class="fas fa-star" style="color: #ffc107;"></i>
                  <i class="fas fa-star" style="color: #ffc107;"></i>
                  <i class="fas fa-star" style="color: #ffc107;"></i>
                  <i class="fas fa-star" style="color: #ffc107;"></i>
              </div>
                <a href="#" class="btn" style="background-color: #b79e79; color: white;">Buy Now</a>
              </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
      <div class="card product-card">
          <img src="https://i.pinimg.com/474x/5d/00/b9/5d00b9a28548d51a5038913e9bd82e08.jpg" alt="Product 1">
          <div class="card-body text-center">
              <h5 class="card-title">Pink Roses Cardigan</h5>
              <p class="product-price">Rp.199.000</p>
              <div class="product-rating mb-2">
                <i class="fas fa-star" style="color: #ffc107;"></i>
                <i class="fas fa-star" style="color: #ffc107;"></i>
                <i class="fas fa-star" style="color: #ffc107;"></i>
                <i class="fas fa-star" style="color: #ffc107;"></i>
                <i class="fas fa-star" style="color: #ffc107;"></i>
            </div>
              <a href="#" class="btn" style="background-color: #b79e79; color: white;">Buy Now</a>
            </div>
      </div>
  </div>
  <div class="col-md-3 mb-4">
    <div class="card product-card">
        <img src="https://i.pinimg.com/736x/40/67/ac/4067ace9384e55bf04f852f558e2bc8f.jpg" alt="Product 2">
        <div class="card-body text-center">
            <h5 class="card-title">Blueberry Knit Cardigan</h5>
            <p class="product-price">Rp.199.000</p>
            <div class="product-rating mb-2">
              <i class="fas fa-star" style="color: #ffc107;"></i>
              <i class="fas fa-star" style="color: #ffc107;"></i>
              <i class="fas fa-star" style="color: #ffc107;"></i>
              <i class="fas fa-star" style="color: #ffc107;"></i>
              <i class="fas fa-star-half-alt" style="color: #ffc107;"></i>
            </div>
            <a href="#" class="btn" style="background-color: #b79e79; color: white;">Buy Now</a>
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

</body>
</html>
    