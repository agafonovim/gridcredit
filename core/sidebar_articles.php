<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';
try
{
	$s = $pdo->prepare('SELECT * FROM articles ORDER BY id DESC LIMIT 5');
    $s->execute();
    $result = $s->fetchAll();
}
catch (PDOException $e) {}

foreach ($result as $row) {
	$sidebar_articles[] = array(
		'id'=> $row['id'],
		'title'=> $row['title']
	);
}
?>