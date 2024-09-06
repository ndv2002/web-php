<?php
require_once(ADMIN_PATH . 'controllers/BaseController.php');
class DashboardController extends BaseController
{
  function __construct()
  {
    $this->folder = 'dashboards';
  }

  public function home()
  {
    $data = array(
      'title' => 'Home',
      'money' => 'This is home page'
    );
    $this->render('home', $data);
  }

  public function error()
  {
    $this->render('error');
  }

}
