<?php
class DisposisiModel
{
    private $table = 'disposisi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDisposisi()
    {

        $this->db->query('SELECT disposisi.*, surat_masuk.asal_surat FROM ' . $this->table . ' JOIN surat_masuk ON surat_masuk.asal_surat = disposisi.asal_surat_id');
        $this->db->query('SELECT disposisi.*, surat_masuk.nomor_surat FROM ' . $this->table . ' JOIN surat_masuk ON surat_masuk.nomor_surat = disposisi.nomor_surat_id');

        return $this->db->resultSet();
    }

    public function getDisposisiById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function tambahDisposisi($data)
    {
        $query = "INSERT INTO disposisi(asal_surat_id, tgl_surat, nomor_surat_id, perihal, tgl_diterima, nmr_agenda, diteruskan, disposisi) VALUES (:asal_surat_id, :tgl_surat, :nomor_surat_id, :perihal, :tgl_diterima, :nmr_agenda, :diteruskan, disposisi)";
        $this->db->query($query);
        $this->db->bind('asal_surat_id', $data['asal_surat_id']);
        $this->db->bind('tgl_surat', $data['tgl_surat']);
        $this->db->bind('nomor_surat_id', $data['nomor_surat_id']);
        $this->db->bind('perihal', $data['perihal']);
        $this->db->bind('tgl_diterima', $data['tgl_diterima']);
        $this->db->bind('nmr_agenda', $data['nmr_agenda']);
        $this->db->bind('diteruskan', $data['diteruskan']);
        $this->db->bind('disposisi', $data['disposisi']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataDisposisi($data)
    {
        $query = "UPDATE disposisi SET asal_surat_id=:asal_surat_id, tgl_surat=:tgl_surat, nomor_surat_id=:nomor_surat_id, perihal=:perihal, tgl_diterima=:tgl_diterima, nmr_agenda=:nmr_agenda, diteruskan=:diteruskan, disposisi=:disposisi WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('asal_surat_id', $data['asal_surat_id']);
        $this->db->bind('tgl_surat', $data['tgl_surat']);
        $this->db->bind('nomor_surat_id', $data['nomor_surat_id']);
        $this->db->bind('perihal', $data['perihal']);
        $this->db->bind('tgl_diterima', $data['tgl_diterima']);
        $this->db->bind('nmr_agenda', $data['nmr_agenda']);
        $this->db->bind('diteruskan', $data['diteruskan']);
        $this->db->bind('disposisi', $data['disposisi']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteDisposisi($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDisposisi()
    {
        $key = $_POST['key'];
        $this->db->query('SELECT * FROM ' . $this->table . ' JOIN surat_masuk ON surat_masuk.id = disposisi.id WHERE tgl_masuk LIKE :key');
        $this->db->bind('key', "%$key%");

        return $this->db->resultSet();
    }
}
