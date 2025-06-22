<?php
include_once('views/register.view.php');
include_once('models/Model.model.php');
class RegisterController extends Model
{
    private $status;
    public function index()
    {
        if (isset($_POST['registerBtn'])) {
            $this->checkUser($_POST['username'], $_POST['email'], $_POST['password']);
        }
        return register($this->status);
    }
    private function checkUser($username, $email, $password)
    {
        $check_username = $this->getSingleById("users", "username", "$username");
        $check_email = $this->getSingleById("users", "email", "$email");
        if ($check_username) {
            return $this->status = [
                "Status" => "Username sudah digunakan!"
            ];
        }
        if ($check_email) {
            return $this->status = [
                "Status" => "Email sudah digunakan!"
            ];
        }
        $this->sendData($username, $email, $password);
    }
    private function sendData($username, $email, $password)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
<<<<<<< HEAD
        $this->createSpecify("users", ["username", "email", "password"], ["'$username'", "'$email'", "'$password'"]);
=======
        $this->createSpecify("salahtable", ["username", "email", "password"], ["'$username'", "'$email'", "'$password'"]);
>>>>>>> f35bcb7e848d360235c9eabfd791a50b8edbfd54

        $this->getAll("users");

        return $this->status = [
            "Status" => "Registrasi berhasil!"
        ];
    }
}
