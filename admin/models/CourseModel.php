<?php
require_once(BASE_PATH  . 'lib/BaseModel.php');

class CourseModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllCourses()
    {
        $sql = "SELECT * FROM courses";

        $result = $this->conn->query($sql);
        $subjects = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $subjects[] = $row;
            }
        }
        return $subjects;
    }

    public function addCourse($name, $subject, $duration, $price, $image, $description)
    {
        $sql = "INSERT INTO `courses` (`id`, `name`, `duration`, `price`, `image`, `ranking_count`, `description`, `subject_id`, `created_at`) VALUES (NULL,'$name', $duration,  $price, '$image','0', '$description', $subject, current_timestamp());";
        $this->conn->query($sql);
    }
    public function editCourse($id, $name, $duration, $price, $image, $description)
    {
        $sql = "UPDATE `courses` SET `name` = '$name', `duration` = '$duration', `price` = '$price', `image` = '$image', `description` = '$description' WHERE `courses`.`id` = '$id';";
        $this->conn->query($sql);
    }
    public function getById($id)
    {
        $sql = "SELECT * FROM `courses` WHERE `id` = $id";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }
    public function deleteById($id)
    {
        $sql = "DELETE FROM courses WHERE `courses`.`id` = $id";
        $this->conn->query($sql);
    }
}
