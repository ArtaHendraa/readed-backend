<?php
require_once("models/Model.model.php");
require_once("views/myblogs.view.php");
class myblogsController extends Model
{
    public function index()
    {
        session_start();
        $userid = $_SESSION['user_data']['user_id'];
        $data = $this->getAllById("articles", "user_id", "$userid");
        myblogs($data);
    }
}