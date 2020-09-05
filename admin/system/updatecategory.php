<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/system/functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';

try {
	$updatecategory = $pdo->prepare('UPDATE categories SET name = :name, link = :link WHERE id = :id');
	$updatecategory->bindValue('id', $_POST['id']);
	$updatecategory->bindValue('name', $_POST['name']);
	$updatecategory->bindValue('link', $_POST['link']);
	$updatecategory->execute();

    $selectcategory = $pdo->prepare('SELECT * FROM categories WHERE id = :id');
    $selectcategory->bindValue('id', $_GET['id']);
    $selectcategory->execute();

    $category = $selectcategory->fetch();
} catch (Exception $e) {}
?>