<?php
require_once("views/createblog.php");
require_once("models/Model.model.php");
session_start();
class CreateController extends Model
{
    private $status;
    public function index()
    {
        $get_category = $this->getAll("category");
        if (isset($_POST['createblogBtn'])) {
            $judul = $_POST['article_name'];
            $type = $_POST['article_type'];
            $slug = str_replace(" ", "-", $judul);
            $randomedSlug = $slug . "-" . rand(10000, 100000);
            $filename = $randomedSlug . $_SESSION['user_data']['username'] . rand() . $_FILES['image_url']['name'];
            $target_dir = "public/assets/uploads/";
            $target_file = $target_dir . basename($filename);
            $filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $author = $_SESSION['user_data']['username'];
            $user_id = $_SESSION['user_data']['user_id'];
            $this->createBlog($judul,  $type, $target_file, $randomedSlug, $author, $user_id, $filetype);
        }

        createblog($this->status, $get_category);
    }
    private function createBlog($judul,  $type, $target_file, $slug, $author, $user_id, $filetype)
    {
        if ($filetype !== "png" && $filetype !== "jpg" && $filetype !== "jpeg" && $filetype !== "webp") {
            return $this->status = [
                "Status" => false,
                "Pesan" => "Tipe file tidak sesuai"
            ];
        } else {
            try {
                $this->createSpecify("articles", ["user_id", "article_name", "slug", "article_type", "image_url", "status", "author"], ["$user_id", "'$judul'", "'$slug'",  "'$type'", "'$target_file'", "'Draft'", "'$author'"]);
                move_uploaded_file($_FILES['image_url']['tmp_name'], $target_file);
                return $this->status = [
                    "Status" => true,
                    "Pesan" => "Blog berhasil dibuat!"
                ];
            } catch (\Throwable $th) {
                return $this->status = [
                    "Status" => false,
                    "Pesan" => "Terjadi kesalahan"
                ];
            }
        }
    }
}
