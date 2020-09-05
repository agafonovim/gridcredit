<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';
try
{
	$result = $pdo->query('SELECT * FROM categories');
}
catch (PDOException $e) {}

foreach ($result as $row) {
	$sidebar_categories[] = array(
		'link'=> $row['link'],
		'name'=> $row['name'],
		'id'=> $row['id']
	);
}
?>