<?php
function login($result)
{
    $value = "";
    if (isset($_COOKIE['username'])) {
        $value = $_COOKIE['username'];
    }
    if ($result) {
        echo $result['Message'];
    }
?>
    <form method="post">
        <input type="text" placeholder="Username Or email" name="username" value="<?= $value ?>">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" name="loginBtn">Login</button>
    </form>
<?php }
