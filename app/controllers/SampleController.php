<?php
require_once(USER_PATH . 'controllers/BaseController.php');
class SampleController extends BaseController
{
  private $model;
  private $table;
  function __construct()
  {
    $this->folder = 'sample';
    $this->model=$this->model('UserModel');
  }

  public function home()
  {
    /*$products =
      [
        ['id' => 1, 'name' => "Product 1", 'price' => 1000, 'image' => "https://picsum.photos/200/300"],
        ['id' => 2, 'name' => "Product 2", 'price' => 2000, 'image' => "https://picsum.photos/200/300"],
        ['id' => 3, 'name' => "Product 3", 'price' => 3000, 'image' => "https://picsum.photos/200/300"],
      ];
    $data = array('products' => $products);*/
    $this->render('home');//, $data);
  }

  public function error()
  {
    $this->render('error');
  }
  public function edit()
  {
    $this->render('edit');
  }
  /*public function getDisplayedCourses(){
    return $this->model->getDisplayedCourses();
  }*/
}
