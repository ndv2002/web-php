<?php
require_once(BASE_PATH  . 'lib/BaseModel.php');
class NewsModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }
    public function gettAll()
    {
        $query = "SELECT * FROM news";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function create(array $data = [])
    {
        // id	title	image	content	published_at	created_at	updated_at	
        $query = "INSERT INTO news (title, image, content, published_at) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssss", ...array_values($data));
        $stmt->execute();
        return $stmt->affected_rows;
    }
    public function update($id, array $data = [])
    {
        $query = "UPDATE news SET title = ?, image = ?, content = ?, published_at = ? WHERE id = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssss", ...array_values($data));
        $stmt->execute();
        return $stmt->affected_rows;
    }
    public function getById($id)
    {
        $query = "SELECT * FROM news WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
    public function delete($id)
    {
        $query = "DELETE FROM news WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->affected_rows;
    }
}
