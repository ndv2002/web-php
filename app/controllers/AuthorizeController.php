<?php
require_once(USER_PATH . 'controllers/BaseController.php');
class AuthorizeController extends BaseController
{
  private $user;
  function __construct()
  {
    $this->folder = 'authorizes';
    // create new variable

    $this->user = $this->model('UserModel');
  }

  public function login()
  {
    if (isset($_SESSION["auth"])) {
      header('Location: /home');
    } else if (isset($_POST['login-btn'])) {
      $email = escape($_POST['email']);
      $password = escape($_POST['password']);

      $password = md5($password);
      $user = $this->user->getBy(['email' => $email, 'password' => $password]);

      if (count($user)  == 1) {
        $user = $user[0];
        if (true) {
          // echo "ok";
          $_SESSION["auth"] = true;
          $_SESSION["user"] = array(
            'id' => $user['id'],
            'username' => $user['username'],
            'email' => $user['email'],
            'role' => $user['role'],
          );
          $_SESSION["success"] = "You are now logged in";
          // if (isset($_POST['remember'])) {
          //   setcookie('email', $email, time() + 60 * 60 * 24 * 30);
          //   setcookie('password', $password, time() + 60 * 60 * 24 * 30);
          // }
          if ($_SESSION["user"]["role"] == 2) {
            header("location: /admin");
          } else {
            header("location: /home");
          }
          exit();
        } else {
          header("location: /pages/banned");
          exit();
        }
      } else {
        $_SESSION["error"] = "Wrong email or password";
        $this->render('login', array(
          'title' => 'Login'
        ),);
      }
    } else {
      $this->render('login', array(
        'title' => 'Login'
      ),);
    }
  }

  public function register()
  {
    if (isset($_POST['register-btn'])) {
      $name = escape($_POST['name']);
      $email = escape($_POST['email']);
      $password = escape($_POST['password']);
      $password2 = escape($_POST['password2']);
      $role = 0;

      if (isset($_POST['agree'])) {
        $_SESSION["error"] = "Please agree to our terms and conditions";
        $this->render('register', array(
          'title' => 'Register'
        ));
      }
      // check if email already exists
      $user = $this->user->getBy(['email' => $email]);
      if (count($user) > 0) {
        $_SESSION["error"] = "Email already exists";
        $this->render('register', array(
          'title' => 'Register'
        ));
        exit();
      }

      // check if password match
      if ($password != $password2) {
        $_SESSION["error"] = "Password do not match";
        $this->render('register', array(
          'title' => 'Register'
        ));
        exit();
      }

      $password = md5($password);

      $this->user->create([
        'username' => $name,
        'email' => $email,
        'password' => $password,
        'role' => $role
      ]);

      $_SESSION["success"] = "You are now registered and can log in";
      header('Location: /authorize/login');
    } else {
      $this->render('register', array(
        'title' => 'Register'
      ));
    }
  }
  public function logout()
  {
    session_destroy();
    header('Location: /home');
  }
}
