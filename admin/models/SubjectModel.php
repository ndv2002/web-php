<?php
require_once(BASE_PATH  . 'lib/BaseModel.php');

class SubjectModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getById($id)
    {
        $sql = "SELECT * FROM subjects WHERE subjects.id = $id";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }
    public function getByName($name)
    {
        $sql = "SELECT * FROM subjects WHERE subjects.name = '$name'";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getNameById($id)
    {
        $sql = "SELECT `name` FROM subjects WHERE subjects.id = $id";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();;
    }
    public function getAll()
    {
        $sql = "SELECT * FROM subjects";
        $result = $this->conn->query($sql);
        $subjects = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $subjects[] = $row;
            }
        }
        return $subjects;
    }
    public function insert($name)
    {
        $query = "INSERT INTO subjects(name) VALUES(?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $name);
        $stmt->execute();
        return $stmt->insert_id;
    }
    public function delete($id)
    {
        $sql = "DELETE FROM subjects WHERE subjects.id = $id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    public function edit($name, $id)
    {
        $current_timestamp = time();
        $current_timestamp = strtotime('+5 hours', $current_timestamp);
        $created_at = date('Y-m-d H:i:s', $current_timestamp);
        $sql = "UPDATE subjects SET name = '$name', created_at = '$created_at' WHERE id = $id";
        $this->conn->query($sql);
    }
}
