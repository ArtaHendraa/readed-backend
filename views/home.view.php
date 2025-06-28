<?php
function home()
{
    $check = new checkUser();
    $check->check();
    if (!isset($_SESSION['user_data'])) {
        header('Location: /login');
        exit;
    }
?>
    <p><?= $_SESSION['user_data']['user_id'] ?></p>
    <p><?= $_SESSION['user_data']['username'] ?></p>
    <p><?= $_SESSION['user_data']['email'] ?></p>
<?php }
