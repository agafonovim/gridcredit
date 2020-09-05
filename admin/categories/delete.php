<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/system/functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';

try {
    $deletecategory = $pdo->prepare('DELETE FROM categories WHERE id = :id');
    $deletecategory->bindValue('id', $_GET['id']);
    $deletecategory->execute();
    header('Location: /admin/categories');
} catch (Exception $e) {}
?>