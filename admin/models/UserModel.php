<?php
require_once(BASE_PATH  . 'lib/BaseModel.php');

class UserModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function block($id)
    {
        $sql = "UPDATE `users` SET `role` = '-1' WHERE `users`.`id` = $id;";
        $this->conn->query($sql);
    }
    public function unblock($id)
    {
        $sql = "UPDATE `users` SET `role` = '0' WHERE `users`.`id` = $id;";
        $this->conn->query($sql);
    }
    public function getById($id)
    {
        $sql = "SELECT * FROM users JOIN user_info ON users.id = user_info.user_id WHERE users.id = $id";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }
    public function getBy($condition)
    {
        $sql = "SELECT * FROM users WHERE ";
        foreach ($condition as $key => $value) {
            $sql .= "$key = $value AND ";
        }
        $sql = substr($sql, 0, -4);

        $result = $this->conn->query($sql);
        $users = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }
        return $users;
    }
}
