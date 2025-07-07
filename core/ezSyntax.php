<?php

function getFile($file)
{
    include_once($file);
}

function apalah()
{
    echo "khna biji 2025";
}

function testingFunc($function)
{
    try {
        if (is_string($function)) {
            $tes = new ReflectionFunction($function);
            if ($tes->getNumberOfParameters() == 0) {
                return true;
            } else {
                return false;
            }
        }
        return false;
    } catch (Throwable $e) {
        return false;
    }
}

function createPublicAPI($value)
{
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    return $value;
}
function changeTitle($title)
{
    echo "<script>document.title = '$title'</script>";
}

include_once("models/Model.model.php");
class checkUser extends Model
{
    public function check()
    {
        session_start();
        $userid = $_SESSION['user_data']['user_id'];
        $query = $this->customQuery("SELECT user_id FROM users where user_id='$userid'");
        if (!mysqli_num_rows($query) > 0) {
            echo "usernya dah dihapus";
            session_destroy();
        }
    }
}
