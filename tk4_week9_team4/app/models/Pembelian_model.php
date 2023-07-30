<?php 

class Pembelian_model {
    private $table = 'pembelian';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getlistSuplier()
    {
        return $this->db->get('Suplier');
    }

    public function getAllPembelian()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPembelianById($IdPembelian)
    {
        $this->db->query('SELECT 
        * from pembelian
        WHERE IdPembelian=:IdPembelian');
        $this->db->bind('IdPembelian', $IdPembelian);
        return $this->db->single();
    }

    public function tambahDataPembelian($data)
    {
        $query = "INSERT INTO pembelian
                    VALUES
                  (null,:JumlahPembelian, :HargaBeli,null,CURDATE())";
        
        $this->db->query($query);
        $this->db->bind('JumlahPembelian', $data['JumlahPembelian']);
        $this->db->bind('HargaBeli', $data['HargaBeli']);
        
        
        

        $this->db->execute();

        return $this->db->rowCount();;
    }

    public function hapusDataPembelian($IdPembelian)
    {
        $query = "DELETE FROM pembelian WHERE IdPembelian = :IdPembelian";
        
        $this->db->query($query);
        $this->db->bind('IdPembelian', $IdPembelian);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataPembelian($data)
    {
        $query = "UPDATE pembelian SET
                    JumlahPembelian = :JumlahPembelian,
                    HargaBeli = :HargaBeli
                  WHERE IdPembelian = :IdPembelian";
        
        $this->db->query($query);
        $this->db->bind('JumlahPembelian', $data['JumlahPembelian']);
        $this->db->bind('HargaBeli', $data['HargaBeli']);
        $this->db->bind('IdPembelian', $data['IdPembelian']);

        $this->db->execute();

        return $this->db->rowCount();
    }



}