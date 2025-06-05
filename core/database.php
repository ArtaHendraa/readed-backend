<?php

class Database
{
    protected $db;
    private $username;
    private $password;
    private $host;
    protected $connect;

    public function __construct()
    {
        $this->host = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->db = "toko";

        $this->connect = new mysqli($this->host, $this->username, $this->password, DB_NAME);

        if (!$this->connect) {
            die("Gagal koneksi ke database: " . mysqli_connect_error());
        }
    }
}
