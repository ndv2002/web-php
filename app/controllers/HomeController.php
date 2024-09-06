<?php
require_once(USER_PATH . 'controllers/BaseController.php');
class HomeController extends BaseController
{
  function __construct()
  {
    $this->folder = 'homes';
  }

  public function home()
  {
    $this->render('home',[],'home');
  }

  public function error()
  {
    $this->render('error');
  }
  
}
