<?php
include_once("models\Model.model.php");
class testController extends Model
{
    public function index()
    {
        $data = $this->getAll("article");
        foreach ($data as $key) {
            echo $key['title'] . "<br>";
        }
    }
}
