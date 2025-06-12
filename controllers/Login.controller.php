<?php
include_once("models\Auth.mode.php");
include_once("views\login.view.php");
class LoginController extends auth
{
    public function index()
    {
        if (isset($_POST['loginBtn'])) {
            $this->auth($_POST['userData'], "users", $_POST['password']);
        }
        login();
    }
}
