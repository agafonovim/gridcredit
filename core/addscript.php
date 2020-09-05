<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';

try {
	$categoryselectsql = $pdo->query('SELECT * FROM categories');

	$add_sql = 'INSERT INTO added_ads SET
	name = :name,
	email = :email,
	number = :number,
	title = :title,
	text = :text,
	category = :category,
	date = CURDATE()';

	$add_request = $pdo->prepare($add_sql);
	$add_request->bindValue(':name', trim($_POST['name']));
	$add_request->bindValue(':email', $_POST['email']);
	$add_request->bindValue(':number', $_POST['number']);
	$add_request->bindValue(':title', trim($_POST['title']));
	$add_request->bindValue(':text', $_POST['text']);
	$add_request->bindValue(':category', $_POST['category']);
	$add_request->execute();

    $uncheckedads = $pdo->prepare("SELECT count(id) FROM added_ads");
    $uncheckedads->execute();
    $uncheckedads = $uncheckedads->fetchColumn();
    mail('admin@gridcredit.ru', 'Добавлено объявление', 'Добавлено новое объявление от пользователя: ' . $_POST['email'] . '
Непроверенных объявлений: ' . $uncheckedads);
	
	session_start();
	$_SESSION['sended'] = success;

    header("Location: https://gridcredit.ru/");
    exit();
} catch (Exception $e) {}

foreach ($categoryselectsql as $row) {
	$categoryselect[] = array(
		'name'=> $row['name'],
		'id'=> $row['id']
	);
}
?>