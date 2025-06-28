<?php
include_once("views/components/navbar.php");
function dashboard()
{
    session_start();

    echo $_SESSION['user_data']['username']
?>
<?php } ?>