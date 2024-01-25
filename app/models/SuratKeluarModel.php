<?php
class SuratKeluarModel
{
    private $table = 'surat_keluar';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSurat()
    {
        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();
    }

    public function getSuratById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function tambahSurat($data)
    {
        $query = "INSERT INTO surat_keluar(nmr_surat, tgl_suratkeluar, perihal, tujuan_surat) VALUES (:nmr_surat, :tgl_suratkeluar, :perihal, :tujuan_surat)";
        $this->db->query($query);
        $this->db->bind('nmr_surat', $data['nmr_surat']);
        $this->db->bind('tgl_suratkeluar', $data['tgl_suratkeluar']);
        $this->db->bind('perihal', $data['perihal']);
        $this->db->bind('tujuan_surat', $data['tujuan_surat']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataSurat($data)
    {
        $query = 'UPDATE surat_keluar SET nmr_surat=:nmr_surat, tgl_suratkeluar=:tgl_suratkeluar, perihal=:perihal, tujuan_surat=:tujuan_surat WHERE id=:id';
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nmr_surat', $data['nmr_surat']);
        $this->db->bind('tgl_suratkeluar', $data['tgl_suratkeluar']);
        $this->db->bind('perihal', $data['perihal']);
        $this->db->bind('tujuan_surat', $data['tujuan_surat']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deletesurat($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function carisurat()
    {
        $key = $_POST['key'];
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE surat_keluar LIKE :key');
        $this->db->bind('key', "%$key%");

        return $this->db->resultSet();
    }
}
