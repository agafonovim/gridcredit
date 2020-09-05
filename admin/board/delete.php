<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/system/functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';

try {
    $deletecategory = $pdo->prepare('DELETE FROM added_ads WHERE id = :id');
    $deletecategory->bindValue('id', $_GET['id']);
    $deletecategory->execute();
    header('Location: /admin/board');
} catch (Exception $e) {}
?>