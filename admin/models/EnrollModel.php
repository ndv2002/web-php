<?php
require_once(BASE_PATH  . 'lib/BaseModel.php');

class EnrollModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }

   
    public function getCourseByOrder($condition){
        $sql = "SELECT * FROM courses WHERE ";
        foreach ($condition as $key => $value) {
            $sql .= "$key = $value AND ";
        }
        $sql = substr($sql, 0, -4);

        $result = $this->conn->query($sql);
        $course = $result->fetch_assoc();
        
        return $course;
    }
    public function getSubjectByOrder($condition){
        $sql = "SELECT subjects.* FROM subjects INNER JOIN courses ON subjects.id = courses.subject_id WHERE ";
        foreach ($condition as $key => $value) {
            $sql .= "$key = $value AND ";
        }
        $sql = substr($sql, 0, -4);

        $result = $this->conn->query($sql);
        $subject = $result->fetch_assoc();
       
        return $subject;
    }
    public function getUserByOrder($condition){
        $sql = "SELECT * FROM users WHERE ";
        foreach ($condition as $key => $value) {
            $sql .= "$key = $value AND ";
        }
        $sql = substr($sql, 0, -4);

        $result = $this->conn->query($sql);
        $user = $result->fetch_assoc();
       
        return $user;
    }
    public function getOrders(){
        $sql = "SELECT * FROM orders";
    $result = mysqli_query($this->conn, $sql);
    return $result;
    }
    public function getEnrollments(){
        $sql = "SELECT * FROM enrollments";
    $result = mysqli_query($this->conn, $sql);
    return $result;
    }
    public function getOrderById($id){
        $sql = "SELECT * FROM orders where id = $id";
    $result = mysqli_query($this->conn, $sql);
    return $result;
    }
    public function getEnrollmentById($id){
        $sql = "SELECT * FROM enrollments where id = $id";
    $result = mysqli_query($this->conn, $sql);
    return $result;
    }
    public function deleteOrderById($id){
        $sql = "DELETE FROM orders WHERE id = $id";
    mysqli_query($this->conn, $sql);
    }
    public function deleteEnrollmentById($id){
        $sql = "DELETE FROM enrollments WHERE id = $id";
    mysqli_query($this->conn, $sql);
    }
    public function insertEnrollment($user_id,$course_id){
        $sql="INSERT INTO enrollments (user_id, course_id, enrollment_date) VALUES ($user_id, $course_id, now())";
        mysqli_query($this->conn, $sql);
    }
    
}
