<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/system/functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';

try {
    $allcategories = $pdo->query('SELECT * FROM categories');
  	foreach ($allcategories as $row) {
	  $categories[] = array(
	    'link'=> $row['link'],
	    'name'=> $row['name'],
	    'id'=> $row['id']
	  );
    }
    
    $addcategory = $pdo->prepare('INSERT INTO categories SET name = :name, link = :link');
    $addcategory->bindValue(':name', $_POST['name']);
    $addcategory->bindValue(':link', $_POST['link']);
    $addcategory->execute();
    header("Location: . ");
} catch (Exception $e) {}
?>