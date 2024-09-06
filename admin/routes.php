<?php
// Controller => Action
$controllers = array(
    'dashboard' => ['home', 'error'],
    'subject' => ['home', 'add', 'edit', 'delete', 'detail'],
    'course' => ['home', 'add', 'edit', 'delete', 'detail'],
    'user' => ['home',  'detail', 'block', 'unblock'],
    'enroll' => ['home', 'detail', 'approve', 'reject', 'detail_enrollment','delete_enrollment'],
    'news' => ['home', 'add', 'edit', 'delete', 'detail'],
    'setting' => ['home', 'about' ],
);

// default controller and action is SampleController and home
if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
    $controller = 'dashboard';
    $action = 'error';
}


// echo ADMIN_PATH . 'controllers/' .  ucfirst($controller) . 'Controller.php';
include_once(ADMIN_PATH . 'controllers/' .  ucfirst($controller) . 'Controller.php');
// create an instance of the controller
$classname = ucfirst($controller) . 'Controller';
$controller = new $classname;
// call the action with the parameters
if (!empty($params)) {
    call_user_func_array(array($controller, $action), $params);
} else {
    $controller->$action();
}

