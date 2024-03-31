<?php 

namespace app\Models;


class BaseModel 
{
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