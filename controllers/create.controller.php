<?php
include_once("views/createblog.view.php");
include_once("models/Model.model.php");
session_start();
class CreateController extends Model
{
    public function index()
    {
        changeTitle("create");
        if (isset($_POST['createblogBtn'])) {
            $target_dir = "public/assets/uploads/";
            $target_file = $target_dir . basename($_FILES['image_url']['name']);
            $filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $judul = $_POST['article_name'];
            $type = $_POST['article_type'];
            $slug = str_replace(" ", "-", $judul);
            $author = $_SESSION['user_data']['username'];
            $user_id = $_SESSION['user_data']['user_id'];
            $this->createBlog($judul,  $type, $target_file, $slug, $author, $user_id);
        }
        createblog();
    }
    private function createBlog($judul,  $type, $target_file, $slug, $author, $user_id)
    {
        $this->createSpecify("articles", ["user_id", "article_name", "slug", "article_type", "image_url", "status", "author"], ["$user_id", "'$judul'", "'$slug'",  "'$type'", "'$target_file'", "'Published'", "'$author'"]);
        move_uploaded_file($_FILES['image_url']['tmp_name'], $target_file);
    }
}
