<?php
$middleware = new Middleware();
$middleware->ifAuth();
function home()
{
?>
<?php
    foreach ($_SESSION['userData'] as $data) {
        echo $data . "<br>";
    }
?>
<?php }
