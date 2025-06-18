<?php
include_once("views/testfile.view.php");
class TestfileController
{
    public function index()
    {
        if (isset($_POST['upfoto'])) {
            $target_dir = "public/assets/uploads/";
            $target_file = $target_dir . basename($_FILES['fotonya']['name']);
            $filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $this->upload($target_file, $filetype);
        }
        testfile();
    }
    private function upload($file, $filetype)
    {
        if ($filetype != "png" && $filetype != "jpg" && $filetype != "jpeg") {
            echo "wrong file type";
            exit;
        }
        move_uploaded_file($_FILES['fotonya']['tmp_name'], $file);
    }
}
