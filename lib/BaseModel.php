<?php

class BaseModel
{
    protected $conn;
    public function __construct()
    {
        $this->conn = DB::getInstance();
    }
    public function __destruct()
    {

    }
}
