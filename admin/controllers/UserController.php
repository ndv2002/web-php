<?php
require_once(ADMIN_PATH . 'controllers/BaseController.php');
class UserController extends BaseController
{
  private $userModel;
  private $table;
  function __construct()
  {
    $this->folder = 'users';
    $this->table = 'users';
    $this->userModel = $this->model('UserModel');
  }
  public function home()
  {
    $users = $this->userModel->getBy(['role' => 0]);
    $blockedUser = $this->userModel->getBy(['role' => -1]);
    $data = array(
      'users' => $users,
      'blockedUser' => $blockedUser
    );
    $this->render('home', $data);
  }

  public function block()
  {
    if (isset($_POST['btn-blockUser'])) {
      $id = $_POST['id'];
      $this->userModel->block($id);
      header('Location: /admin/user/home');
    }
  }
  public function unblock()
  {
    if (isset($_POST['btn-unblockUser'])) {
      $id = $_POST['id'];
      $this->userModel->unblock($id);
      header('Location: /admin/user/home');
    }
  }
  public function detail()
  {
    if (isset($_POST['detail-user-btn'])) {
      $id = $_POST['id'];
      $result = $this->userModel->getById($id);
      $user = $result;
      $data = array('user' => $user);
      $this->render('detail', $data);
    }
  }
}
