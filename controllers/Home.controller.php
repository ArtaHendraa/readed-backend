<?php
include_once("models/Model.model.php");
include_once("views/home.view.php");

class HomeController extends Model
{
    public function index()
    {
        $check = new checkUser();
        $check->check();
        if (!isset($_SESSION['user_data'])) {
            header('Location: /login');
            exit;
        }
        $userid = $_SESSION['user_data']['user_id'];
        $data = $this->getAllById("articles", "user_id", "$userid");
        home($data);
    }
}
