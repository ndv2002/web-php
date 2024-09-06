<?php
require_once(BASE_PATH  . 'lib/BaseModel.php');
class UserModel extends BaseModel
{
  public function __construct()
  {
    parent::__construct();
  }

  public function create(array $data = [])
  {
    $query = "INSERT INTO users (username, email, password, role) VALUES (?,?,?,?)";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("sssi", ...array_values($data));
    $stmt->execute();

    $id = $this->conn->insert_id;

    // create in user_info
    $query = "INSERT INTO user_info (user_id) VALUES (?)";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->insert_id;
  }
  public function getBy(array $data = [])
  {
    $query = "SELECT * FROM users WHERE ";
    $i = 0;
    foreach ($data as $key => $value) {
      if ($i == 0) {
        $query .= $key . " = ?";
      } else {
        $query .= " AND " . $key . " = ?";
      }
      $i++;
    }
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param(str_repeat("s", count($data)), ...array_values($data));
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
  }
  public function getById($id){
      $sql = "SELECT * FROM users JOIN user_info ON users.id = user_info.user_id WHERE users.id = $id";
      $result = $this->conn->query($sql);
      return $result->fetch_assoc();
  }
  public function pwedit($id, $password){
        $sql = "UPDATE `users` SET `password` = '$password' WHERE `users`.`id` = '$id';";
        $this->conn->query($sql);
  }
  public function update($id, $avatar, $f_name, $l_name, $gender, $phone, $address, $age)
    {
        $sql = "UPDATE `user_info` SET `avatar` = '$avatar', `first_name` = '$f_name', `last_name` = '$l_name', `gender` = '$gender', `phone` = '$phone', `address` = '$address', `age` = '$age' WHERE `user_info`.`user_id` = '$id';";
        $this->conn->query($sql);
    }
}
