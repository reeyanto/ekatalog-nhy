<section id="hero" class="hero d-flex align-items-center section-bg">
  <div class="container">
    <div class="row justify-content-between gy-5">
      <div class="col-lg-5 order-2 order-lg-1 text-center text-lg-start">
        <img src="<?=BASEURL;?>/assets/frontsite/img/logo.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        <h2 class="running-text"><br>Teks Berjalan di Sini...</h2>
      </div>
      <div class="col-lg-5 order-1 order-lg-2 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
        <h2>Enjoy Your Day<br>With Our Dress</h2>
        <p data-aos="fade-up" data-aos-delay="100">Jahitan Berkualitas Tinggi, Gaya yang Tanpa Batas</p>
      </div>
    </div>
  </div>
</section>

<style>
  .running-text {
    position: absolute;
    top: 0;
    left: -100%; /* Mulai dari luar layar kiri */
    white-space: nowrap; /* Agar teks tidak turun ke baris baru */
    animation: slideRight 10s linear infinite; /* Sesuaikan kecepatan dan durasi animasi */
  }

  @keyframes slideRight {
    0% {
      left: -100%; /* Mulai dari luar layar kiri */
    }
    100% {
      left: 100%; /* Berhenti di luar layar kanan */
    }
  }
</style>
