<?php
require_once("views\profile.view.php");
require_once("models\Model.model.php");
class ProfileController
{
    public function index()
    {
        session_start();

        profil($_SESSION['user_data']);
    }
}