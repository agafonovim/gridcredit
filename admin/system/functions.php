<?php
session_start();
if (!$_SESSION['login']) {
    header('Location: /admin/auth');
    exit();
}

if ($_GET['do'] == 'logout') {
    unset($_SESSION['login']);
    header('Location: /admin/auth');
    session_destroy();
}

?>