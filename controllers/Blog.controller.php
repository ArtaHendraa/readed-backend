<?php
require_once("models/Model.model.php");
require_once("views/editor.php");
require_once("views/blog.php");
class BlogController extends Model
{
    public function index()
    {
        session_start();
        $userid = $_SESSION['user_data']['user_id'];
        $data = $this->getAllById("articles", "user_id", "$userid");
        blog($data);
    }
    public function edit($slug)
    {
        session_start();
        $userid = $_SESSION['user_data']['user_id'];
        $query = $this->customQuery("SELECT * FROM articles WHERE user_id='$userid' AND slug='$slug'");
        if (mysqli_num_rows($query) > 0) {
            $data = mysqli_fetch_assoc($query);
            editor($data);
        } else {
            echo "not your blog buddy";
        }

        if (isset($_POST['create_data'])) {
            $content = $_POST['postnya'];
            try {
                $this->customQuery("UPDATE articles SET content='$content', status='published' WHERE slug='$slug' AND user_id='$userid'");
                $this->redirect();
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        if (isset($_POST['create_draft'])) {
            $content = $_POST['postnya'];
            try {
                $this->customQuery("UPDATE articles SET content='$content', status='draft' WHERE slug='$slug' AND user_id='$userid'");
                $this->redirect();
            } catch (\Throwable $th) {
                throw $th;
            }
        }
    }
    public function deleteblog($slug)
    {
        session_start();
        $get_article = $this->getSingleById('articles', "slug", $slug);
        $userid = $_SESSION['user_data']['user_id'];

        if ($get_article['user_id'] === $userid) {
            $this->delete('articles', 'slug', $slug);
            $img_url = $get_article['image_url'];
            unlink("$img_url");
            $this->redirect();
        }
    }
    private function redirect()
    {
        echo "<script>
        window.location.replace('/blog'); </script>";
    }
}
