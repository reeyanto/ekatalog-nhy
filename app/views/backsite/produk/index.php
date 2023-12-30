 <!-- Main content -->
 <section class="content">
   <div class="container-fluid">
     <div class="row">
       <div class="col-12">
         <?php
          Flasher::Message();
          ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Produk</h3>
          </div>
          <div class="card-body">
            <form action="<?= BASEURL; ?>/backsite/produk/search" method="post">
              <div class="row mb-3">
                <div class="col-lg-6">
                  <div class="input-group">
                    <input type="text" class="form-control"
                      placeholder="" name="key">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                      <a class="btn btn-outline-danger" href="<?= BASEURL; ?>/backsite/produk">Reset</a>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <div class="float-right">
                     <a href="<?= BASEURL; ?>/backsite/produk/create" class="btn btn-primary mb-4"><i class="bi bi-bookmark-plus-fill">TAMBAH DATA</i>
                  </a>
                   </div>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nama</th>
                  <th>Deskripsi</th>
                  <th>Harga</th>
                  <th>Gambar</th>
                  <th style="width: 150px">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data['produk'] as $row) : ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['deskripsi']; ?></td>
                    <td><?= $row['harga']; ?></td>
                    <td style="text-align: center;">
                            <img src="<?= BASEURL . "/public/assets/frontsite/img/foto_profile/" . $row['foto']; ?>" style="width: 60px;">
                          </td>
                    <td>
                      <a href="<?= BASEURL; ?>/backsite/produk/edit/<?= $row['id'] ?>" class="badge badge-info">Edit</a>
                      <a href="<?= BASEURL; ?>/backsite/produk/deploy/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>

                    </td>
                  </tr>
                  <?php $no++;
                endforeach; ?>
              </tbody>
            </table>
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