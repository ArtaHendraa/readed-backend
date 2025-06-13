<?php

class Middleware
{

    public function ifAuth()
    {
        session_start();
        if (!isset($_SESSION['userData'])) {
            echo "blom login";
            exit;
        }
    }
    public function roleCheck()
    {
        // masih perlu atau blm saya tidak tahu
    }
}
