<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/system/functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';


try {
    $allcategories = $pdo->query('SELECT * FROM categories');
  	foreach ($allcategories as $row) {
	  $categories[] = array(
	    'name'=> $row['name'],
	    'id'=> $row['id']
	  );
    }

    $selectedpremiumad = $pdo->prepare('SELECT * FROM ads WHERE id = :id');
    $selectedpremiumad->bindValue('id', $_GET['id']);
    $selectedpremiumad->execute();
    $premiumad = $selectedpremiumad->fetch();
    
    if ($_POST['id']) {
	    $updatead = $pdo->prepare('UPDATE ads SET title = :title, text = :text, name = :name, email = :email, number = :number, category = :categoryid WHERE id = :id');
	    $updatead->bindValue(':id', $_GET['id']);
	    $updatead->bindValue(':title', $_POST['title']);
	    $updatead->bindValue(':text', $_POST['text']);
	    $updatead->bindValue(':name', $_POST['name']);
	    $updatead->bindValue(':email', $_POST['email']);
	    $updatead->bindValue(':number', $_POST['number']);
	    $updatead->bindValue(':categoryid', $_POST['category']);
	    $updatead->execute();
	    header('Location: /admin/board/premium');
	    exit();
    }
} catch (Exception $e) {echo 'Подключение не удалось: ' . $e->getMessage();}
?>