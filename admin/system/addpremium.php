<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/system/functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';

try {
    $allpremiumads = $pdo->query("SELECT id, title, name, email FROM ads WHERE premium LIKE 'yes'");
  	foreach ($allpremiumads as $row) {
	  $premiumads[] = array(
	    'id'=> $row['id'],
	    'title'=> $row['title'],
        'name'=> $row['name'],
	    'email'=> $row['email']
	  );
    }
    if ($_POST['id']) {
        $addpremiumad = $pdo->prepare("UPDATE ads SET premium = 'yes' WHERE id = :id");
        $addpremiumad->bindValue(':id', $_POST['id']);
        $addpremiumad->execute();
        header("Location: . ");
        exit();
    }
    
} catch (Exception $e) {}
?>