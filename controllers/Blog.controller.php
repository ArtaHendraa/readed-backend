<?php
include_once("models\Model.model.php");
include_once("views/editor.php");
class BlogController extends Model
{
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
    private function redirect()
    {
        echo "<script>
        window.location.replace('/myblogs'); </script>";
    }
}
