<?php
class Conn {
    protected $conn;
    private $db = "kampus";
    private $username = "root";
    private $pass = "";
    private $host = "localhost";

    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->username, $this->pass, $this->db, 3307);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal :" . mysqli_connect_errno();
        }
    }

    public function tampilData(){}
}

class pengusul extends Conn {
    public function tampilData() {
        $data = mysqli_query($this->conn, "select * from izin_ketidakhadiran_pegawai");
        while ($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
}

class keperluan extends Conn {
    public function tampilData() {
        $data = mysqli_query($this->conn, "select * from izin_ketidakhadiran_pegawai");
        while ($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
}

$pengusul = new pengusul();
$keperluan = new keperluan();