<?php
$middleware = new Middleware();
$middleware->ifAuth();
function home()
{

    var_dump($_SESSION['user_data'])
?>

<?php }
