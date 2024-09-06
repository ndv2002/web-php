<?php 
// Path: middleware\auth.php
    if (!isset($_SESSION['auth'])) {
        header('Location: /authorize/login');
    }

?>