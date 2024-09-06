<?php 
// Path: middleware\auth.php
    if (!isset($_SESSION['auth'])) {
        header('Location: /login');
    }
    if ($_SESSION["user"]["role"] != 2) {
        header('Location: /home');
        }
?>        
