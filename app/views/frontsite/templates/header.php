<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center bg-black">
    <div class="container d-flex align-items-center justify-content-between ">
      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <h1 style="color:white;">NHY Taylor<span></span></h1>
      </a>

      <!-- Tambahkan gambar di sini -->
      <img src="<?= BASEURL; ?>/assets/frontsite/img/Moto.jpg"  style="width: 500px; height: auto;">
      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?= BASEURL; ?>/home">Home</a></li>
          <li><a href="<?= BASEURL; ?>/frontsite/about/">About</a></li>
          <li><a href="<?= BASEURL; ?>/frontsite/menu/">Produk</a></li>
          <li class="dropdown"><a href="#"><span>Media Sosial</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="https://www.instagram.com/ndaa_prtm/">instagram</a></li>
              <li><a href="https://www.facebook.com/profile.php?id=100085052242791">Facebook</a></li>
              <li><a href="rafelinvivia@gmail.com">Gmail</a></li>
            </ul>
          </li>
          <a class href="https://wa.me/+62895618529419">Hubungi admin</a>
         <!-- Menggunakan elemen button untuk membuat tampilan tombol -->
            <li>
      <div>
      <div style="position: relative;">
      <li class="nav-item d-none d-sm-inline-block" style="position: absolute; top: 55%; left: 10%; transform: translate(-30%, -50%); text-align: center;">
        <button class="btn btn-primary" type="submit" onclick="window.location.href = '<?php echo BASEURL;  ?>/frontsite/login';">
          Login
        </button>
      </div>

            </li>
        </ul>
      </nav><!-- .navbar -->
<i class="mobile-nav-toggle mobile-nav-show bi bi-list" style="color: white;"></i>
<i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x" style="color: white;"></i>
    </div>
  </header><!-- End Header -->
