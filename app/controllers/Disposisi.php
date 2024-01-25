<?php
class Disposisi extends Controller
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
        $data['title'] = 'Data Disposisi';
        $data['disposisi'] = $this->model('DisposisiModel')->getAllDisposisi();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('disposisi/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Disposisi';
        $data['surat_masuk'] = $this->model('SuratMasukModel')->getAllSurat();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('disposisi/create', $data);
        $this->view('templates/footer');
    }

    public function simpanDisposisi()
    {
        if ($this->model('DisposisiModel')->tambahDisposisi($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/disposisi');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/disposisi');
            exit;
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Detail Disposisi ';
        $data['surat_masuk'] = $this->model('SuratMasukModel')->getAllSurat();
        $data['disposisi'] = $this->model('DisposisiModel')->getDisposisiById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('disposisi/edit', $data);
        $this->view('templates/footer');
    }

    public function updateDisposisi()
    {
        if ($this->model('DisposisiModel')->updateDataDisposisi($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . base_url . '/disposisi');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/disposisi');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('DisposisiModel')->deleteDisposisi($id) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/disposisi');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/disposisi');
            exit;
        }
    }

    public function cari()
    {
        $data['title'] = 'Data Disposisi';
        $data['disposisi'] = $this->model('DisposisiModel')->cariDisposisi();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('disposisi/index', $data);
        $this->view('templates/footer');
    }

    public function lihatlaporan()
    {
        $data['title'] = 'Data Laporan Buku';
        $data['buku'] = $this->model('BukuModel')->getAllBuku();
        $this->view('buku/lihatlaporan', $data);
    }


    public function laporan()
    {
        $data['buku'] = $this->model('BukuModel')->getAllBuku();
        $pdf = new FPDF('p', 'mm', 'A4');

        // membuat halaman baru 
        $pdf->AddPage();
        // setting jenis font yang akan digunakan 
        $pdf->SetFont('Arial', 'B', 14);
        // mencetak string  
        $pdf->Cell(190, 7, 'LAPORAN BUKU', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat 
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(85, 6, 'JUDUL', 1);
        $pdf->Cell(30, 6, 'PENERBIT', 1);
        $pdf->Cell(30, 6, 'PENGARANG', 1);
        $pdf->Cell(15, 6, 'TAHUN', 1);
        $pdf->Cell(25, 6, 'KATEGORI', 1);
        $pdf->Ln();
        $pdf->SetFont('Arial', '', 10);

        foreach ($data['buku'] as $row) {
            $pdf->Cell(85, 6, $row['judul'], 1);
            $pdf->Cell(30, 6, $row['penerbit'], 1);
            $pdf->Cell(30, 6, $row['pengarang'], 1);
            $pdf->Cell(15, 6, $row['tahun'], 1);
            $pdf->Cell(25, 6, $row['nama_kategori'], 1);
            $pdf->Ln();
        }

        $pdf->Output('I', 'Laporan Buku.pdf', true);
    }
}
