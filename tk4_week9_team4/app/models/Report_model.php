<?php 

class Report_model {
    private $table = 'penjualan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllReport()
    {
        $this->db->query("SELECT * FROM VW_TRANSACTION");
        return $this->db->resultSet();
    }

    public function getReportSum()
    {
        $query = "SELECT * FROM VW_TRANSACTION";
        $this->db->query($query);


        $this->db->execute();
        // $this->db->query('SELECT SUM(HargaJual) AS TOTAL FROM penjualan');
        return $this->db->single();
    }


}