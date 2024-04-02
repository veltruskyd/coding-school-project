<?php 

namespace app\Models;

use Core\database;

class BaseModel {

    protected $database;

    public function __construct() {
        $this->database = new Database();

    }

    protected $data = [];

    public function all()
    {
        $this->data = $this->database->query('SELECT * from tracks');
        return $this->data;
    }

    public function find($id)
    {
        //vrátí usera s konkrétním ID
    }
}