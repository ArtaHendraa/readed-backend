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
    public function handlePost()
    {
        $name = "khana";
        $id = 3;
        $this->postCurl($name, $id);
    }
    private function post()
    {
        $data = json_decode(file_get_contents("php://input"), true);
        $id = $data['id'];
        $name = $data['name'];
        $insert = $this->create("dummy", ["$id", "'$name'"]);
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
        createPublicAPI($this->getAll("dummy"));
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

    private function postCurl($name, $id)
    {
        $data = [
            "id" => $id,
            "name" => $name
        ];
        $jsonData = json_encode($data);
        echo "<pre>" . $jsonData . "</pre>";

        // inisialisasi curl
        $ch = curl_init("http://readed-backend.test/api");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true); // set method menjadi post
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData); //set value post sesuai dengan variable $jsonData
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Accept: appliction/json'
        ]); // Penting, karena buat ngasi tau bahwa bakal ngirim input berupa json

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
            return false;
        } else {
            echo 'Response API : ' . $response;
        }
        curl_close($ch);
    }
}
