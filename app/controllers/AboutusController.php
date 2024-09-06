<?php
require_once(USER_PATH . 'controllers/BaseController.php');
class AboutusController extends BaseController
{
  private $user;
  function __construct()
  {
    $this->folder = 'aboutuss';
  }

  public function home()
  {
    $this->render('home');
  }
}
