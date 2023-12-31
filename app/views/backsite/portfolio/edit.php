<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php Flasher::Message(); ?>
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Portfolio</h3>
          </div>
          <div class="card-body">
            <!-- form start -->
            <form role="form" action="<?= BASEURL; ?>/backsite/portfolio/update" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $data['portfolio']['id']; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label>Judul</label>
                  <input type="text" class="form-control" placeholder="masukkan Judul" name="judul" value="<?= $data['portfolio']['judul']; ?>">
                </div>
                <div class="form-group">
                  <label>Album</label>
                  <select class="form-control" name="id_album">
                    <option value="">Pilih</option>
                    <?php foreach ($data['album'] as $row) : ?>
                        <option value="<?= $row['id']; ?>"
                        <?php if ($data['portfolio']['id_album'] == $row['id']){
                            echo "selected";
                        }?>>
                        <?= $row['nama']; ?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" class="form-control" placeholder="masukkan Keterangan" name="keterangan" value="<?= $data['portfolio']['keterangan']; ?>">
                </div>
                <div class="form-group">
                  <label>Photo</label>
                  <input type="text" class="form-control" placeholder="masukkan Photo" name="photo" value="<?= $data['portfolio']['photo']; ?>">
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