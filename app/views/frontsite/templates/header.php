 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center bg-info">
    <div class="container d-flex align-items-center justify-content-between ">
      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>NHY Taylor<span></span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?= BASEURL; ?>/home">Home</a></li>
          <li><a href="<?= BASEURL; ?>/frontsite/about">About</a></li>
          <li><a href="<?= BASEURL; ?>/frontsite/menu">Menu</a></li>
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
                <button class="btn btn-primary" type="submit" onclick="window.location.href = '<?php echo BASEURL;  ?>/frontsite/login';">
                    Login
                </button>
            </li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
