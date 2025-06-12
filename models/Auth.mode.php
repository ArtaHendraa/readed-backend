<?php
include_once("core/database.php");
class auth extends Database
{
    protected function auth($userdata, $table, $password)
    {
        $query = "SELECT * FROM $table where username='$userdata' OR email='$password'";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            echo "sukses";
        }
    }
}
