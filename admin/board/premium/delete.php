<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/system/functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';

try {
    $deletepremiumad = $pdo->prepare("UPDATE ads SET premium = 'no' WHERE id = :id");
    $deletepremiumad->bindValue('id', $_GET['id']);
    $deletepremiumad->execute();
    header('Location: /admin/board/premium');
} catch (Exception $e) {}
?>