<?php
class surat_keluar extends Controller
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
        $data['title'] = 'Data surat_keluar';
        $data['surat_keluar'] = $this->model('SuratKeluarModel')->getAllSurat();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('surat_keluar/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['title'] = 'Data surat_keluar';
        $data['surat_keluar'] = $this->model('SuratKeluarModel')->cariSurat();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('surat_keluar/index', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Detail surat_keluar';
        $data['surat_keluar'] = $this->model('SuratKeluarModel')->getSuratById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('surat_keluar/edit', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah surat_keluar';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('surat_keluar/create', $data);
        $this->view('templates/footer');
    }

    public function simpanSurat()
    {
        if ($this->model('SuratKeluarModel')->tambahSurat($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/surat_keluar');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/surat_keluar');
            exit;
        }
    }

    public function updateSurat()
    {
        if ($this->model('SuratKeluarModel')->updateDataSurat($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location:' . base_url . '/surat_keluar');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location:' . base_url . '/surat_keluar');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('SuratKeluarModel')->deleteSurat($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location:' . base_url . '/surat_keluar');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/surat_keluar');
            exit;
        }
    }
}
