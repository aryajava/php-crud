<?php

class Barang
{
    private $model;

    function __construct()
    {
        $this->model = new BarangModel();
    }
    public function index()
    {
        $txt['title'] = "Data Barang";
        $txt['active'] = 1;
        $data['listBarang'] = $this->model->getBarang();
        // return $this->render('daftar-barang', $data);
        $this->render('templates/header', $txt);
        $this->render('pages/barang/daftar-barang', $data);
        $this->render('templates/footer');
    }
    public function add()
    {
        $txt['title'] = "Tambah Barang";
        $txt['active'] = 1;
        // return $this->render('barang/tambah-barang');
        $this->render('templates/header', $txt);
        $this->render('pages/barang/tambah-barang');
        $this->render('templates/footer');
    }
    public function addBarang()
    {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $spek = $_POST['spek'];
        $noseri = $_POST['seri'];
        $lokasi = $_POST['lokasi'];
        $kondisi = $_POST['kondisi'];

        if (empty($kode) || empty($nama) || empty($spek) || empty($noseri) || empty($lokasi) || empty($kondisi)) {
            Flasher::setFlash('Barang <strong>gagal</strong>', 'ditambahkan', 'danger');
            header("Location: http://localhost/php-crud/barang/tambah");
        } else {
            $result = $this->model->insertBarang($_POST);
            if (!$result) {
                Flasher::setFlash('Barang <strong>gagal</strong>', 'ditambahkan', 'danger');
                header("Location: http://localhost/php-crud/barang/");
            } else {
                Flasher::setFlash('Barang <strong>berhasil</strong>', 'ditambahkan', 'success');
                header("Location: http://localhost/php-crud/barang/");
            }
        }
    }
    public function edit()
    {
        $txt['title'] = "Ubah Data Barang";
        $txt['active'] = 1;

        $id = $_GET['id'];
        $kode = $_GET['kdbarang'];

        if (empty($id) || empty($kode)) {
            Flasher::setFlash('Data barang <strong>gagal</strong>', 'ditemukan', 'danger');
            header("Location: http://localhost/php-crud/barang");
        } else {
            $data['barang'] = $this->model->getBarang($id, $kode);
            $this->render('templates/header', $txt);
            // $this->render('ubah-barang', $data);
            $this->render('pages/barang/ubah-barang', $data);
            $this->render('templates/footer');
        }
    }
    public function editBarang()
    {
        $id = $_POST['id'];
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $spek = $_POST['spek'];
        $noseri = $_POST['seri'];
        $lokasi = $_POST['lokasi'];
        $kondisi = $_POST['kondisi'];

        if (empty($nama) || empty($spek) || empty($noseri) || empty($lokasi) || empty($kondisi)) {
            Flasher::setFlash('Data barang <strong>gagal</strong>', 'diubah', 'danger');
            header("Location: http://localhost/php-crud/barang/ubah?id=" . $id . "&&kdbarang=" . $kode);
        } else {
            $result = $this->model->editBarang($_POST);
            if (!$result) {
                Flasher::setFlash('Data barang <strong>gagal</strong>', 'diubah', 'danger');
                header("Location: http://localhost/php-crud/barang/");
            } else {
                Flasher::setFlash('Data barang <strong>berhasil</strong>', 'diubah', 'success');
                header("Location: http://localhost/php-crud/barang/");
            }
        }
    }
    public function remove()
    {
        $id = $_GET['id'];
        $kode = $_GET['kdbarang'];

        if (empty($id) || empty($kode)) {
            Flasher::setFlash('Data barang <strong>gagal</strong>', 'ditemukan', 'danger');
            header("Location: http://localhost/php-crud/barang");
        } else {
            $result = $this->model->deleteBarang($id, $kode);
            if (!$result) {
                Flasher::setFlash('Data barang <strong>gagal</strong>', 'dihapus', 'danger');
                header("Location: http://localhost/php-crud/barang/");
            } else {
                Flasher::setFlash('Data barang <strong>berhasil</strong>', 'dihapus', 'success');
                header("Location: http://localhost/php-crud/barang/");
            }
        }
    }
    public function search()
    {
        $txt['title'] = "Cari Barang";
        $txt['active'] = 1;

        $keyword = $_POST['keyword'];

        if (empty($keyword)) {
            Flasher::setFlash('Data barang <strong>gagal</strong>', 'ditemukan', 'danger');
            header("Location: http://localhost/php-crud/barang");
        } else {
            $data['listBarang'] = $this->model->searchBarang($_POST);
            // return $this->render('daftar-barang', $data);
            $this->render('templates/header', $txt);
            if ($this->model->searchBarang($_POST) == false) {
                Flasher::setFlash('Data barang <strong>tidak ada</strong>', '..', 'danger');
                $this->render('pages/barang/daftar-barang', $data);
            } else {
                Flasher::setFlash('Data barang <strong>berhasil</strong>', 'ditemukan', 'success');
                $this->render('pages/barang/daftar-barang', $data);
            }
            $this->render('templates/footer');
        }
    }
    private function render($view, $data = [])
    {
        if ($data) {
            foreach ($data as $key => $value) {
                $$key = $value;
            }
        }
        require_once __DIR__ . '/../views/' . $view . '.php';
    }
}
