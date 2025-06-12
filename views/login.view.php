<?php
function login()
{ ?>
    <form method="post">
        <input type="text" placeholder="Username Or email" name="userData">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" name="loginBtn">Login</button>
    </form>
<?php }
