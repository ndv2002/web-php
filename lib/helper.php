<?php

function slug($str)
{
    return $str;
}
function upload($field, $config = [])
{
    $defaultConfig = [
        'name' => '',
        'upload_path' => './',
        'allowed_exts' => '*',
        'overwrite' => true,
        'max_size' => 0,
    ];
    $options = array_merge($defaultConfig, $config);

    if (!isset($_FILES[$field]) || $_FILES[$field]['error'] !== UPLOAD_ERR_OK) {
        return false;
    }

    $file = $_FILES[$field]; 
    $extension =  strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

    if ($options['allowed_exts'] !== '*' && !in_array($extension, explode('|', $options['allowed_exts']))) {
        return false;
    }

    // $sizeInMB = $file['size'] / 1024 / 1024;
    // if ($options['max_size'] > 0 && $sizeInMB > $options['max_size']) {
    //     return false;
    // }

    $name = empty($options['name']) ? $file['name'] : $options['name'] . '.' . $extension;
    $filePath = $options['upload_path'] . $name;

    if ($options['overwrite'] && file_exists($filePath)) {
        unlink($filePath);
    }

    if (!move_uploaded_file($file['tmp_name'], $filePath)) {
        // return false;
        return "Hahaha" ;
    }

    return $name;
}

function escape($string)
{
    $string = strip_tags($string);
    $string = mysqli_real_escape_string(DB::getInstance(), $string);

    return $string;
}

function helper_login($email, $password)
{
    $email = escape($email);
    $password = escape($password);

    $password = md5($password);

    $conn = DB::getInstance();
    $sql = "SELECT * FROM users WHERE email=? and `password`=?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $res = $stmt->get_result();
    // if length of result is 1
    if ($res->num_rows == 1) {
        $res = $res->fetch_assoc();
        if (!isBanned($res["banned"])) {
            $_SESSION["auth"] = true;
            $_SESSION["user"] = $res;
            header("location: /home");
            exit();
        } else {
            header("location: /pages/banned");
            exit();
        }
    } else {
        echo '<script>alert("Something went wrong")</script>';
    }
}

function isBanned($date)
{
    return isset($date) && $date > date("Y-m-d");
}
