</section>
<section id="detail" class="detail">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <p>Detail <span>Baju</span></p>
        </div>
        <div style="display: flex; align-items: center;">
            <img src="<?= BASEURL . "/public/assets/frontsite/img/foto_profile/" . $data['produk']['foto']; ?>" style="width:250px;">
            <div style="margin-left: 20px;">
                <h2><?=$data['produk']['nama']; ?></h2>
                <p><?=$data['produk']['deskripsi']; ?></p>
                  <?=$data['produk']['harga']; ?></p>
            </div>
        </div>
    </div>
</section>
