<?php
require_once(ADMIN_PATH . 'controllers/BaseController.php');
class NewsController extends BaseController
{
  private $newsModel;
  private $table;
  function __construct()
  {
    $this->folder = 'news';
    $this->table = 'news';
    $this->newsModel = $this->model('NewsModel');
  }
  public function home()
  {
    $news = $this->newsModel->gettAll();
    $this->render('home', array(
      'newss' => $news
    ));
  }

  public function detail()
  {
    $id = $_GET['id'];
    $result = $this->newsModel->getById($id);
    $news = $result;
    $data = array('news' => $news);
    $this->render('detail', $data);
  }
  public function add()
  {
    if (isset($_POST['add-news-btn'])) {
      $title = escape($_POST['title']);
      $content = escape($_POST['content']);
      $published_at = escape($_POST['published_at']);

      $image = upload(
        'news_img',
        array(
          'name' => 'news_img' . time(),
          'upload_path' => BASE_PATH . 'public/uploads/',
          'allowed_exts' => "jpg|png|jpeg|gif",
          'overwrite' => true,
        ),
      );


      $this->newsModel->create(array(
        'title' => $title,
        'image' => $image,
        'content' => $content,
        'published_at' => $published_at,
      ));

      header('Location:/admin/news/home');
    } else {
      $this->render('add', array(
        'title' => 'Add'
      ));
    }
  }
  public function delete()
  {
    if (isset($_POST['delete-btn'])) {
      $id = $_POST['id'];
      $this->newsModel->delete($id);
      header('Location:/admin/news/home');
    }
    exit;
  }
  public function edit()
  {
    if (isset($_POST['edit-new-btn']))
    {
      $id = $_GET['id'];
      $title = escape($_POST['title']);
      $content = escape($_POST['content']);
      $published_at = escape($_POST['published_at']);
      if (isset($_FILES['news_img']) && $_FILES['news_img']['error'] == 0) {
        $image = upload(
          'news_img',
          array(
            'name' => 'news_img' . $id,
            'upload_path' => BASE_PATH . 'public/uploads/',
            'allowed_exts' => "jpg|png|jpeg|gif",
          ),
        );
      } else {
        $image = $_POST['old_image'];
      }
    

      $this->newsModel->update($id, array(
        'title' => $title,
        'image' => $image,
        'content' => $content,
        'published_at' => $published_at,
      ));

      header('Location:/admin/news/home');
    }
    else 
    {
      $id = $_GET['id'];
      $result = $this->newsModel->getById($id);
      $news = $result;
      $data = array('news' => $news);
      $this->render('edit', $data);
    }
  }
}
