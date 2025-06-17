<?php
function register($status = [])
{ ?>
    <?php
    if ($status) {
        echo $status['Status'];
    }
    ?>
    <form method="post">
        <input type="text" placeholder="Username" name="username">
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" name="registerBtn">Register</button>
    </form>
<?php }
