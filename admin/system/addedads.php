<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/system/functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';

try {
	$addedads = $pdo->query('SELECT * FROM added_ads LIMIT 50');
} catch (PDOException $e) {}
foreach ($addedads as $row) {
	$ads[] = array(
		'id'=> $row['id'],
		'title'=> $row['title'],
		'name'=> $row['name'],
		'email'=> $row['email'],
		'number'=> $row['number'],
	);
}
?>