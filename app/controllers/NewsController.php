<?php
require_once(USER_PATH . 'controllers/BaseController.php');
class NewsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'news';
  }

  public function home()
  {
    $newsModel = $this->model('NewsModel');
    $news = $newsModel->gettAll();
    $this->render('home', array(
      'title' => 'News',
      'news' => $news
    ));
  }
  public function detail()
  {
    $newsModel = $this->model('NewsModel');
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $new = $newsModel->getById($id);
      $this->render('detail', array(
        'title' => 'News',
        'new' => $new
      ));
    } else {
      header('Location: /news/home');
      
    }
  }
}
