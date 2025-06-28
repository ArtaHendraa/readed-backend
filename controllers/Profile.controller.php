<?php
require_once("views\profile.view.php");
require_once("models\Model.model.php");
class ProfileController extends Model
{
    private $status;
    public function index()
    {
        session_start();

        if (isset($_POST['changePasswordBtn'])) {
            $curr_pw = $_POST['current_password'];
            $new_pw = $_POST['new_password'];
            $rpt_pw = $_POST['confirm_password'];
            $this->ifSame($curr_pw, $new_pw, $rpt_pw);
        }
        profil($_SESSION['user_data'], $this->status);
    }
    private function checkPassword($curr, $new)
    {
        if (password_verify($curr, $_SESSION['user_data']['password'])) {
            $userid = $_SESSION['user_data']['user_id'];
            $new = password_hash($new, PASSWORD_DEFAULT);
            $this->updateSingle('users', 'password', "$new", 'user_id', "$userid");
            return $this->status = [
                'Status' => true,
                'Msg' => "Password berhasil dirubah!"
            ];
        } else {
            return $this->status = [
                'Status' => false,
                'Msg' => "Password Salah!"
            ];
        }
    }

    private function ifSame($curr, $new, $confirm)
    {
        if ($new != $confirm) {
            return $this->status = [
                "Status" => false,
                "Msg" => "Password tidak sama!"
            ];
        }
        $this->checkPassword($curr, $new);
    }
}
