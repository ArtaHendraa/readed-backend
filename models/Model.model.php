<?php
getFile("core/database.php");
class Model extends Database
{
    public function __construct()
    {
        // Inisialisasi koneksi database atau resource lain di sini
        parent::__construct();
    }
    public function getAll($table)
    {
        // Ambil semua data dari tabel
        try {
            $query = "SELECT * FROM $table";
            $hasil = mysqli_query($this->connect, $query);
            $data = [];
            if (mysqli_num_rows($hasil) > 0) {
                while ($row = mysqli_fetch_assoc($hasil)) {
                    $data[] = $row;
                }
            }
            return $data;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function getAllById($table, $field, $id)
    {
        $query = "SELECT * FROM $table WHERE $field='$id' ";
        $result =  mysqli_query($this->connect, $query);
        $data = [];
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }
    public function getSingleById($table, $field, $id)
    {
        $query = "SELECT * FROM $table WHERE $field='$id'";
        $result =  mysqli_query($this->connect, $query);
        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        } else {
            return false;
        }
    }
    public function create($table, ...$data)
    {
        try {
            foreach ($data as $rows) {
                $datanya = implode(",", $rows);
                $query = "INSERT INTO $table VALUES (" . $datanya . ")";
                mysqli_query($this->connect, $query);
            }
            return true;
        } catch (\Throwable $th) {
            echo $th;
            return false;
        }
    }
    public function createSpecify($table, ...$args)
    {
        try {
            $target = implode(",", $args[0]);
            $data = implode(",", $args[1]);
            $query = "INSERT INTO $table ($target) VALUES ($data)";
            mysqli_query($this->connect, $query);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
    public function updateSingle($table, $field, $data, $target, $target_value)
    {
        // Update data berdasarkan ID
        $query = "UPDATE $table SET $field='$data' WHERE $target='$target_value'";
        $result = mysqli_query($this->connect, $query);
        if (!$result) {
            return false;
        }
        return true;
    }

    public function delete($table, $target, $target_value)
    {
        // Hapus data berdasarkan ID
        $query = "DELETE FROM $table WHERE $target='$target_value'";
        $result = mysqli_query($this->connect, $query);
        if (!$result) {
            return false;
        }
        return true;
    }

    public function customQuery($query)
    {
        try {
            $result = mysqli_query($this->connect, $query);
            return $result;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
