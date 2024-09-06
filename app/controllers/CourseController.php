<?php
require_once(USER_PATH . 'controllers/BaseController.php');
class CourseController extends BaseController
{
  private $courseModel;
  private $table;
  function __construct()
  {
    $this->folder = 'courses';
    $this->table = "courses";
    $this->courseModel = $this->model('CourseModel');
  }

  public function home()
  {
    $totalNumOfCourses = 0;
    $temp = $this->courseModel->getCourses();
    $totalNumOfCourses = mysqli_num_rows($temp);
    $addCourses = array();
    $addSubjects = array();
    $subjects = $this->courseModel->getSubjects();
    if (mysqli_num_rows($subjects) > 0) {
      while ($row = mysqli_fetch_assoc($subjects)) {
        $temp = mysqli_fetch_assoc($this->courseModel->getNumberOfCoursesInSubject($row['id']));
        $count = $temp['count'];
        $newValues = array(
          'count' => ''
        );
        $row = array_merge($newValues, $row);
        $row['count'] = $count;
        $addSubjects[] = $row;
      }
    }


    if (isset($_POST['search-box'])) {
      $keyword = $_POST['keyword'];
      $data = array();
      $courses = $this->courseModel->getCoursesByKeyword($keyword);
      if (mysqli_num_rows($courses) > 0) {

        while ($row = mysqli_fetch_assoc($courses)) {

          $subject = $this->courseModel->getSubjectbyCourse(['courses.id' => $row['id']]);
          $newValues = array(
            'subject_name' => ''
          );
          $row = array_merge($newValues, $row);
          $row['subject_name'] = $subject['name'];
          $addCourses[] = $row;
        }
      }
    } else if (isset($_GET['subject_id'])) {
      $id = $_GET['subject_id'];
      $data = array();
      $courses = $this->courseModel->getCoursesBySubjectId($id);
      if (mysqli_num_rows($courses) > 0) {

        while ($row = mysqli_fetch_assoc($courses)) {

          $subject = $this->courseModel->getSubjectbyCourse(['courses.id' => $row['id']]);
          $newValues = array(
            'subject_name' => ''
          );
          $row = array_merge($newValues, $row);
          $row['subject_name'] = $subject['name'];
          $addCourses[] = $row;
        }
      }
    } else {
      $courses = $this->courseModel->getCourses();
      if (mysqli_num_rows($courses) > 0) {


        while ($row = mysqli_fetch_assoc($courses)) {

          $subject = $this->courseModel->getSubjectbyCourse(['courses.id' => $row['id']]);
          $newValues = array(
            'subject_name' => ''
          );
          $row = array_merge($newValues, $row);
          $row['subject_name'] = $subject['name'];
          $addCourses[] = $row;
        }
      }
    }
    $data = array(
      'courses' => $addCourses,
      'subjects' =>  $addSubjects,
      'total' => $totalNumOfCourses
    );
    $this->render('home', $data, 'course_home');
  }
  public function detail()
  {
    $others = array();
    $addComments = array();

    if (isset($_POST['post-course-id'])) {
      $id = $_POST['id'];

      $course = $this->courseModel->getCourseById($id);
      $row = mysqli_fetch_assoc($course);
      $subject = $this->courseModel->getSubjectbyCourse(['courses.id' => $row['id']]);
      $json = file_get_contents($_SERVER['DOCUMENT_ROOT'] . $row['syllabus']);


      $newValues = array(
        'subject_name' => '',
        'sylla' => ''
      );
      $row = array_merge($newValues, $row);
      $row['subject_name'] = $subject['name'];
      for ($i = 0; $i <= 31; ++$i) {
        $json = str_replace(chr($i), "", $json);
      }
      $json = str_replace(chr(127), "", $json);


      if (0 === strpos(bin2hex($json), 'efbbbf')) {
        $json = substr($json, 3);
      }

      $sylla = json_decode($json, true);

      $row['sylla'] = $sylla;
      $others = $row;





      $comments = $this->courseModel->getCommentById($id);
      if (mysqli_num_rows($comments) > 0) {

        while ($rows = mysqli_fetch_assoc($comments)) {

          $user = $this->courseModel->getUserByComment(['comments.id' => $rows['id']]);
          $newValues = array(
            'user_name' => '',
          );
          $rows = array_merge($newValues, $rows);
          // $rows['user_name'] = $user['username'];
          $addComments[] = $rows;
        }
      }




      $isLoggedIn = false;
      $isEnrolled = false;
      $isOrdered = false;
      if (isset($_SESSION['auth'])) {
        $isLoggedIn = true;
        $user_id = $_SESSION['user']['id'];
        if (mysqli_num_rows($this->courseModel->getOrderByUserId($id, $user_id)) > 0) {
          $isOrdered = true;
        } elseif (mysqli_num_rows($this->courseModel->getEnrollByUserId($id, $user_id)) > 0) {
          $isEnrolled = true;
        }
      }

      $data = array(
        'others' => $others,
        'comments' =>  $addComments,
        'isLoggedIn' => $isLoggedIn,
        'isEnrolled' => $isEnrolled,
        'isOrdered' => $isOrdered
      );
      $this->render('detail', $data, 'course_detail');
      return;
    }
    if (isset($_POST['enroll'])) {
      $user_id = $_POST['user_id'];
      $course_id = $_POST['course_id'];
      $this->courseModel->insertOrders($user_id, $course_id);
      $others = array();


      $id = $course_id;

      $course = $this->courseModel->getCourseById($id);
      $row = mysqli_fetch_assoc($course);
      $subject = $this->courseModel->getSubjectbyCourse(['courses.id' => $row['id']]);
      $json = file_get_contents($_SERVER['DOCUMENT_ROOT'] . $row['syllabus']);


      $newValues = array(
        'subject_name' => '',
        'sylla' => ''
      );
      $row = array_merge($newValues, $row);
      $row['subject_name'] = $subject['name'];
      for ($i = 0; $i <= 31; ++$i) {
        $json = str_replace(chr($i), "", $json);
      }
      $json = str_replace(chr(127), "", $json);


      if (0 === strpos(bin2hex($json), 'efbbbf')) {
        $json = substr($json, 3);
      }

      $sylla = json_decode($json, true);

      $row['sylla'] = $sylla;
      $others = $row;




      $addComments = array();
      $comments = $this->courseModel->getCommentById($id);
      if (mysqli_num_rows($comments) > 0) {

        while ($rows = mysqli_fetch_assoc($comments)) {

          $user = $this->courseModel->getUserByComment(['comments.id' => $rows['id']]);
          $newValues = array(
            'user_name' => '',
          );
          $rows = array_merge($newValues, $rows);
          // $rows['user_name'] = $user['username'];
          $addComments[] = $rows;
        }
      }

      $isLoggedIn = true;
      $isEnrolled = false;
      $isOrdered = true;
      $data = array(
        'others' => $others,
        'comments' =>  $addComments,
        'isLoggedIn' => $isLoggedIn,
        'isEnrolled' => $isEnrolled,
        'isOrdered' => $isOrdered
      );





      $this->render('detail', $data, 'course_detail');
      return;
    }


    header('Location: /course');
  }
  public function error()
  {
    $this->render('error');
  }
}
