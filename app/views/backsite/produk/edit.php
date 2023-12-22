<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Produk</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/produk/update" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $data['produk']['id']; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="text" class="form-control" placeholder="masukkan nama produk..." name="edu_nama" value="<?= $data['produk']['edu_nama']; ?>">
                </div>
                <div class="form-group">
                  <label>Deskripsi</label>
                  <input type="text" class="form-control" placeholder="masukkan deskripsi ..." name="edu_deskripsi" value="<?= $data['produk']['edu_deskripsi']; ?>">
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" class="form-control" placeholder="masukkan harga..." name="edu_harga" value="<?= $data['produk']['edu_harga']; ?>">
                </div>
                <div class="form-group">
                  <label>Gambar</label>
                  <input type="text" class="form-control" placeholder="masukkan gambar..." name="edu_gambar" value="<?= $data['produk']['edu_gambar']; ?>">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
              </div>
            </form>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->