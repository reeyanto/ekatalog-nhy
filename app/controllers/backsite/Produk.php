<?php
class Produk extends Controller
{

    public function __construct() {
        if(Session::get('nama') == null) {
            header('location:'. BASEURL . '/frontsite/login');
        }
    }

    public function index()
    {
        $data['title'] = 'Produk';
        $data['produk'] = $this->model('ProdukModel')->getAllProduk();
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/produk/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }
    public function search()
    {
        $data['title'] = 'Produk';
        $data['produk'] = $this->model('ProdukModel')->cariProduk();
        $data['key'] = $_POST['key'];
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/produk/index', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function create()
    {
        $data['title'] = 'Produk';
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/produk/create');
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function store()
    {
       
        if (isset($_POST['proses'])) {
            $namaFile = $_FILES['foto']['name'];
            $ukuranFile = $_FILES['foto']['size'];
            $error = $_FILES['foto']['error'];
            $tmpName = $_FILES['foto']['tmp_name'];

            if ($ukuranFile > 1000000) {
                Flasher::setMessage('Gagal', 'disimpan, Ukuran file melebihi 1 MB', 'danger');
                header('location: ' . BASEURL . '/backsite/Produk');
                exit;
            }

            if ($error === 0) {
                $namaFileBaru = uniqid() . '.' . pathinfo($namaFile, PATHINFO_EXTENSION);
                $tujuan = $_SERVER['DOCUMENT_ROOT'] . ROOT_SEGMENT . PATH_FOTO_PROFILE . $namaFileBaru;

                if (move_uploaded_file($tmpName, $tujuan)) {
                    if ($this->model('ProdukModel')->tambahProduk([
                        "foto"   => $namaFileBaru,
                        "nama"  => $_POST['nama'],
                        "deskripsi" => $_POST['deskripsi'],
                        "harga"  => $_POST['harga'],

                    ]) > 0) {
                        Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
                        header('location: ' . BASEURL . '/backsite/Produk');
                        exit;
                    }
                }
            }
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . '/backsite/Produk');
            exit;
        }

    }


    public function edit($id)
    {
        $data['title'] = 'Produk';
        $data['produk'] = $this->model('ProdukModel')->getProdukById($id);
        $this->view('backsite/templates/style', $data);
        $this->view('backsite/templates/header', $data);
        $this->view('backsite/templates/sidebar', $data);
        $this->view('backsite/templates/breadcrumb', $data);
        $this->view('backsite/produk/edit', $data);
        $this->view('backsite/templates/footer');
        $this->view('backsite/templates/script');
    }

    public function update()
    {
        // if ($this->model('ProdukModel')->updateProduk($_POST) > 0) {
        //     Flasher::setMessage('Berhasil', 'diupdate', 'success');
        //     header('location: ' . BASEURL . '/backsite/produk');
        //     exit;
        // } else {
        //     Flasher::setMessage('Gagal', 'diupdate', 'danger');
        //     header('location: ' . BASEURL . '/backsite/produk');
        //     exit;
        if (isset($_POST['proses'])) {
            $id = $_POST['id'];
            $namaFile = $_FILES['foto']['name'];
            $ukuranFile = $_FILES['foto']['size'];
            $error = $_FILES['foto']['error'];
            $tmpName = $_FILES['foto']['tmp_name'];

            // Cek apakah ada gambar yang diupload
            if ($ukuranFile > 0) {
                // Proses update gambar
                $namaFileBaru = uniqid() . '.' . pathinfo($namaFile, PATHINFO_EXTENSION);
                $tujuan = $_SERVER['DOCUMENT_ROOT'] . ROOT_SEGMENT . PATH_FOTO_PROFILE . $namaFileBaru;

                if (move_uploaded_file($tmpName, $tujuan)) {
                    // Update data anggota dengan foto baru
                    $data = [
                        "id" => $id,
                        "foto" => $namaFileBaru,
                        "nama"  => $_POST['nama'],
                        "deskripsi" => $_POST['deskripsi'],
                        "harga"  => $_POST['harga'],

                    ];

                    if ($this->model('ProdukModel')->updateProduk($data) > 0) {
                        Flasher::setMessage('Berhasil', 'diupdate', 'success');
                        header('location: ' . BASEURL . '/backsite/produk');
                        exit;
                    }
                } else {
                    Flasher::setMessage('Gagal', 'Update foto', 'danger');
                    header('location: ' . BASEURL . '/backsite/produk/edit/' . $id);
                    exit;
                }
            } else {
                // Jika tidak ada gambar yang diupload, update data anggota tanpa mengubah foto
                $data = [
                    "id" => $id,
                        "nama"  => $_POST['nama'],
                        "deskripsi" => $_POST['deskripsi'],
                        "harga"  => $_POST['harga'],
                    // tambahkan field lain yang perlu diupdate
                ];

                if ($this->model('ProdukModel')->updateProduk($data) > 0) {
                    Flasher::setMessage('Berhasil', 'diupdate', 'success');
                    header('location: ' . BASEURL . '/backsite/produk');
                    exit;
                } else {
                    Flasher::setMessage('Gagal', 'diupdate', 'danger');
                    header('location: ' . BASEURL . '/backsite/produk/edit/' . $id);
                    exit;
                }
            }
        }
    }
    public function deploy($id)
    {
        if ($this->model('ProdukModel')->deleteProduk($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . BASEURL . '/backsite/produk');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . BASEURL . '/backsite/produk');
            exit;
        }
    }

}
