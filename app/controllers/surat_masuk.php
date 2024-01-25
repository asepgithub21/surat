<?php
class surat_masuk extends Controller
{
    public function __construct()
    {
        if ($_SESSION['session_login'] != 'sudah_login') {
            Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
            header('location: ' . base_url . '/login');
            exit;
        }
    }

    public function index()
    {
        $data['title'] = 'Data surat_masuk';
        $data['surat_masuk'] = $this->model('SuratMasukModel')->getAllSurat();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('surat_masuk/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['title'] = 'Data surat_masuk';
        $data['surat_masuk'] = $this->model('SuratMasukModel')->cariSurat();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('surat_masuk/index', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Detail surat_masuk';
        $data['surat_masuk'] = $this->model('SuratMasukModel')->getSuratById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('surat_masuk/edit', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah surat_masuk';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('surat_masuk/create', $data);
        $this->view('templates/footer');
    }

    public function simpanSurat()
    {
        if ($this->model('SuratMasukModel')->tambahSurat($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/surat_masuk');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/surat_masuk');
            exit;
        }
    }

    public function updateSurat()
    {
        if ($this->model('SuratMasukModel')->updateDataSurat($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location:' . base_url . '/surat_masuk');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location:' . base_url . '/surat_masuk');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('SuratMasukModel')->deleteSurat($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location:' . base_url . '/surat_masuk');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/surat_masuk');
            exit;
        }
    }
}
