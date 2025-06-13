<?php
include_once("models/Model.model.php");
include_once("views\login.view.php");
class LoginController extends Model
{
    private $status;
    public function index()
    {
        if (isset($_POST['loginBtn'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->auth($username, $password);
        }
        login($this->status);
    }
    private function auth($username, $password)
    {
        $query = $this->customQuery("SELECT * FROM users WHERE username='$username' OR email='$username'");
        if (mysqli_num_rows($query) > 0) {
            $check_user = mysqli_fetch_assoc($query);
        }
        if (!$check_user) {
            $this->status = [
                "Message" => "Username not found"
            ];
            exit();
        }
        if ($check_user['password'] == password_verify($password, $check_user['password'])) {
            session_start();
            $_SESSION['userData'] = $check_user;
            $this->status = [
                "Message" => "Berhasil login njeng"
            ];
            setcookie("username", "$username");
            header("Location: /");
        }
    }
}
