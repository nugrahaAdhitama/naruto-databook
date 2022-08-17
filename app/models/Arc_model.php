<?php

class Arc_model {
    private $table = 'arcs';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // dapatkan semua hasil di tabel arcs
    public function getAllArcs() {
        $this->db->query("SELECT * FROM ". $this->table);
        return $this->db->resultSet();
    }

    // dapatkan hasil tabel arc berdasarkan id
    public function getArcById($id) {
        $this->db->query("SELECT * FROM " . $this->table . "WHERE id=:id");
        $this->db->bind('id', $id);

    }

    // tambah data ke tabel arcs
    public function tambahDataArc($data) {
        $query = "INSERT INTO arcs
                    VALUES ('', :judul_arc, :episode, :deskripsi_arc, :thumbnail_arc)";
        
        $this->db->query($query);
        $this->db->bind('judul_arc', $data['judul_arc']);
        $this->db->bind('episode', $data['episode']);
        $this->db->bind('deskripsi_arc', $data['deskripsi_arc']);
        $this->db->bind('thumbnail_arc', $data['thumbnail_arc']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // hapus data dari tabel arcs
    public function hapusDataArc($id) {
        $query = "DELETE FROM arcs WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // update data dari tabel arcs
    public function updateDataArc($data) {
        $query = "UPDATE arcs set
                    judul_arc = :judul_arc,
                    episode = :episode,
                    deskripsi_arc = :deskripsi_arc,
                    thumbnail_arc = :thumbnail_arc
                    WHERE id = :id
                ";

        $this->db->query($query);
        $this->db->bind('judul_arc', $data['judul_arc']);
        $this->db->bind('episode', $data['episode']);
        $this->db->bind('deskripsi_arc', $data['deskripsi_arc']);
        $this->db->bind('thumbnail_arc', $data['thumbnail_arc']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}