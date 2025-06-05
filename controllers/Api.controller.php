<?php
include_once("models/Model.model.php");
class ApiController extends Model
{
    private $method;
    public function __construct()
    {
        parent::__construct();
        $this->method = $_SERVER['REQUEST_METHOD'];
    }
    public function index()
    {
        switch ($this->method) {
            case 'POST':
                $this->post();
                break;
            case 'GET':
                $err = ["Message" => "GET Method not allowed"];
                echo json_encode($err);
                break;
            case 'PUT':
                $this->put();
                break;
            case 'DELETE':
                $this->deleteData();
                break;
        }
    }
    private function post()
    {
        $data = json_decode(file_get_contents("php://input"), true);
        $name = $data['name'];
        $insert = $this->create("dummy", ["'$name'"]);
        if ($insert) {
            echo json_encode(["Message" => "berhasil"]);
            exit;
        } else {
            http_response_code(500);
            echo json_encode(["Message" => "failed"]);
            exit;
        }
    }
    private function put()
    {
        $data = json_decode(file_get_contents("php://input"), true);
        $id = $data['id'];
        $name = $data['name'];
        $update = $this->updateSingle("dummy", "name", "$name", "id", "$id");
        if ($update) {
            echo json_encode(['Message' => 'success']);
            exit;
        } else {
            http_response_code(500);
            echo json_encode(["Message" => "failed"]);
        }
    }
    private function deleteData()
    {
        $data = json_decode(file_get_contents("php://input"), true);
        $id = $data['id'];
        $delete = $this->delete("dummy", "id", "$id");
        if ($delete) {
            echo json_encode(['Message' => 'success']);
            exit;
        } else {
            echo json_encode(['Message' => 'failed']);
            exit;
        }
    }
    public function getAllData()
    {
        try {
            $data = $this->getAll("dummy");
            echo json_encode($data);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function get($data)
    {
        try {
            $data = $this->getSingleById("dummy", "name", "$data");
            echo json_encode($data);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
