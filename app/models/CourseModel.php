<?php
require_once(BASE_PATH  . 'lib/BaseModel.php');
class CourseModel extends BaseModel
{

  public function __construct()
  {
    parent::__construct();
  }
  public function getCourses()
  {
    $sql = "SELECT * FROM courses";
    $result = mysqli_query($this->conn, $sql);
    return $result;
  }
  public function getSubjectByCourse($condition)
  {
    $sql = "SELECT subjects.* FROM subjects INNER JOIN courses ON subjects.id = courses.subject_id WHERE ";
    foreach ($condition as $key => $value) {
      $sql .= "$key = $value AND ";
    }
    $sql = substr($sql, 0, -4);

    $result = $this->conn->query($sql);
    $subject = $result->fetch_assoc();

    return $subject;
  }
  public function getCourseById($id)
  {
    $sql = "SELECT * FROM courses where id = $id;";
    $result = mysqli_query($this->conn, $sql);
    return $result;
  }
  public function getCommentById($id)
  {
    $sql = "SELECT * FROM comments where course_id = $id;";
    $result = mysqli_query($this->conn, $sql);
    return $result;
  }
  public function getUserByComment($condition)
  {
    $sql = "SELECT users.* FROM users INNER JOIN comments ON users.id = comments.user_id WHERE ";
    foreach ($condition as $key => $value) {
      $sql .= "$key = $value AND ";
    }
    $sql = substr($sql, 0, -4);

    $result = $this->conn->query($sql);
    $subject = $result->fetch_assoc();
    return $subject;
  }
  public function getCoursesByKeyword($keyword)
  {
    $sql = "SELECT * FROM courses WHERE LOWER(name) LIKE LOWER('%" . $keyword . "%');";
    $result = mysqli_query($this->conn, $sql);
    return $result;
  }
  public function getSubjects()
  {
    $sql = "SELECT * FROM subjects";
    $result = mysqli_query($this->conn, $sql);
    return $result;
  }
  public function getNumberOfCoursesInSubject($subject_id)
  {
    $sql = "SELECT COUNT(*) as count FROM courses WHERE subject_id = $subject_id;";
    $result = mysqli_query($this->conn, $sql);
    return $result;
  }
  public function getCoursesBySubjectId($id)
  {
    $sql = "SELECT * FROM courses where subject_id = $id;";
    $result = mysqli_query($this->conn, $sql);
    return $result;
  }
  public function getSubjectById($id)
  {
    $sql = "SELECT * FROM subjects where id = $id;";
    $result = mysqli_query($this->conn, $sql);
    return $result;
  }
  public function getEnrollByUserId($course_id, $id)
  {
    $sql = "SELECT * FROM enrollments where user_id = $id and course_id = $course_id;";
    $result = mysqli_query($this->conn, $sql);
    // proccess result
    return $result;


  }
  public function getOrderByUserId($course_id, $id)
  {
    $sql = "SELECT * FROM orders where user_id = $id and course_id = $course_id;";
    $result = mysqli_query($this->conn, $sql);
    // proccess result
    return $result;
  }
  public function insertOrders($user_id, $course_id)
  {
    $sql = "INSERT INTO orders (user_id, course_id) VALUES ($user_id, $course_id);";
    $result = mysqli_query($this->conn, $sql);
  }
}
