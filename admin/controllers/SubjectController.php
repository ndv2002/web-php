<?php
require_once(ADMIN_PATH . 'controllers/BaseController.php');
class SubjectController extends BaseController
{
  private $subjectModel;
  private $table;
  function __construct()
  {
    $this->folder = 'subjects';
    $this->table = 'subjects';
    $this->subjectModel = $this->model('SubjectModel');
  }
  public function home()
  {
    $subjects = $this->subjectModel->getAll();
    $data = array('subjects' => $subjects);
    $this->render('home', $data);
  }

  public function detail()
  {
    if (isset($_POST['detail-subject-btn'])) {
      $id = $_POST['id'];
      $result = $this->subjectModel->getById($id);
      $subject = $result;
      $data = array('subject' => $subject);
      $this->render('detail', $data);
    }
  }
  public function add(){
    if (isset($_POST['adding-btn'])) {
        $name = escape($_POST['name']);
        $subject = $this->subjectModel->getByName($name);
        if (count($subject) > 0) {
            $_SESSION["error"] = "Subject already exists";
            $this->render('add', array(
                'title' => 'Add'
              ));
            exit();
        }
        $this->subjectModel->insert(
            $name
          );
        header('Location:/admin/subject/home');
    } else {
        $this->render('add', array(
            'title' => 'Add'
          ));
    }
  }
  public function delete()
  {
    if (isset($_POST['deleting-btn'])){
        $id = escape($_POST['id']);
        $this->subjectModel->delete(
            $id
          );
        header('Location:/admin/subject/home');
    }
    else {
      $id = $_POST['id'];
      $result = $this->subjectModel->getById($id);
      $subject = $result;
      $data = array('subject' => $subject);
      $this->render('delete', $data);
    }
  }
  public function edit()
  {
    if (isset($_POST['editing-btn'])){
      $name = escape($_POST['name']);
      $id = escape($_POST['id']);
      $subject = $this->subjectModel->getByName($name);
        if (count($subject) > 0) {
            $_SESSION["error"] = "Subject already exists";
            $this->render('edit', array(
                'title' => 'Edit'
              ));
            exit();
        }
      $this->subjectModel->edit(
        $name,$id
      );
      header('Location:/admin/subject/home');
    }
    else {
      $id = $_POST['id'];
      $result = $this->subjectModel->getById($id);
      $subject = $result;
      $data = array('subject' => $subject);
      $this->render('edit', $data);
    }
  }
}
