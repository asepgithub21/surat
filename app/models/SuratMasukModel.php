<?php
class SuratMasukModel
{
    private $table = 'surat_masuk';
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
        $query = "INSERT INTO surat_masuk(asal_surat, nomor_surat, tanggal_surat) VALUES (:asal_surat, :nomor_surat, :tanggal_surat)";
        $this->db->query($query);
        $this->db->bind('asal_surat', $data['asal_surat']);
        $this->db->bind('nomor_surat', $data['nomor_surat']);
        $this->db->bind('tanggal_surat', $data['tanggal_surat']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataSurat($data)
    {
        $query = 'UPDATE surat_masuk SET asal_surat=:asal_surat, nomor_surat=:nomor_surat, tanggal_surat=:tanggal_surat WHERE id=:id';
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('asal_surat', $data['asal_surat']);
        $this->db->bind('nomor_surat', $data['nomor_surat']);
        $this->db->bind('tanggal_surat', $data['tanggal_surat']);
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
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE surat_masuk LIKE :key');
        $this->db->bind('key', "%$key%");

        return $this->db->resultSet();
    }
}
