<?php
// define('UPLOAD_FOLDER', realpath(dirname("admin/uploads")));
require_once(ADMIN_PATH . 'controllers/BaseController.php');
class CourseController extends BaseController
{
    private $subjectModel;
    private $courseModel;
    function __construct()
    {
        $this->folder = 'courses';
        $this->subjectModel = $this->model('SubjectModel');
        $this->courseModel = $this->model('CourseModel');
    }

    public function home()
    {

        $courses = $this->courseModel->getAllCourses();
        $data = array(
            'courses' => $courses,
        );
        $this->render('home', $data);
    }

    public function error()
    {
        $this->render('error');
    }
    public function getSubjectName($id)
    {
        $subjectName = $this->subjectModel->getNameById($id);
        return $subjectName['name'];
    }

    public function detail()
    {
        if (isset($_POST['detail-course-btn'])) {
            $id = $_POST['id'];
            $course = $this->courseModel->getById($id);
            $data = array(
                'course' => $course,
            );
        }
        $this->render('detail', $data);
    }
    public function delete()
    {
        if (isset($_POST['delete-course-btn'])) {
            $id = $_POST['id'];
            $this->courseModel->deleteById($id);
            header('Location: /admin/course/home');
            return;
        }
    }
    public function edit()
    {
        $id = $_GET['id'];
        $course = $this->courseModel->getById($id);
        $subjects = $this->subjectModel->getAll();
        $data = array(
            'subjects' => $subjects,
            'course' => $course,
        );
        $this->render('edit', $data);
        if (isset($_POST['save-button'])) {
            $name = $_POST['name'];
            $duration = $_POST['duration'];
            $price = $_POST['price'];
            $description = $_POST['description'];

            $new_image = $_FILES['image']['name'];
            $old_image = $_POST['old_image'];
            if ($new_image != "") {
                // $update_filename = $new_image;
                $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
                $update_filename = time() . "." . $image_ext;
            } else {
                $update_filename = $old_image;
            }

            $this->courseModel->editCourse($id, $name, $duration, $price, $update_filename, $description);
            $tempname = $_FILES['image']['tmp_name'];
            $folder = "uploads";
            if ($_FILES['image']['name']) {
                move_uploaded_file($tempname, $folder . '/' . $update_filename);
                if (file_exists($folder . '/' . $old_image)) {
                    unlink($folder . '/' . $old_image);
                }
            }
            // header("Location: /admin/course/home");

            if (!headers_sent()) {
                header('Location: /admin/course/home');
            } else {
                echo '<script type="text/javascript">window.location.href="/admin/course/home"</script>';
            }
        }
    }
    public function add()
    {
        $subjects = $this->subjectModel->getAll();
        $data = array(
            'subjects' => $subjects,
        );
        $this->render('add', $data);
        if (isset($_POST['addCourseButton'])) {
            $name = $_POST['name'];
            $subject = $_POST['subject'];
            $duration = $_POST['duration'];
            $price = $_POST['price'];
            $image = $_FILES['image']['name'];
            $image_ext = pathinfo($image, PATHINFO_EXTENSION);
            $filename = time() . "." . $image_ext;
            $tempname = $_FILES['image']['tmp_name'];
            $folder = "uploads/$filename";
            $description = $_POST['description'];
            $this->courseModel->addCourse($name, $subject, $duration, $price, $filename, $description);
            move_uploaded_file($tempname, $folder);
            if (!headers_sent()) {
                header('Location: /admin/course/home');
            } else {
                echo '<script type="text/javascript">window.location.href="/admin/course/home"</script>';
            }
        }
    }
}
