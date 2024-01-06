<?php
class Detail extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $this->detail($id);
        } else {
            // Handle case where no ID is provided, e.g. redirect to a different page
        }
    }

    public function getProdukDetail($id)
    {
        $produk = $this->model('ProdukModel')->getProdukById($id);
        echo json_encode($produk);
    }

    public function detail($id)
    {
        $data['title'] = 'Detail';
        $data['produk'] = $this->model('ProdukModel')->getProdukById($id);
        
        $this->view('frontsite/templates/style', $data);
        $this->view('frontsite/templates/header', $data);
        $this->view('frontsite/detail/index', $data);
        $this->view('frontsite/templates/footer');
        $this->view('frontsite/templates/script');
    }
}
