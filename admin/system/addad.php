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

    $selectedad = $pdo->prepare('SELECT * FROM added_ads WHERE id = :id');
    $selectedad->bindValue('id', $_GET['id']);
    $selectedad->execute();
    $ad = $selectedad->fetch();

	$insertad = $pdo->prepare('INSERT INTO ads SET title = :title, text = :text, date = :date, name = :name, email = :email, number = :number, category = :categoryid');
	$insertad->bindValue(':title', $_POST['title']);
	$insertad->bindValue(':text', $_POST['text']);
	$insertad->bindValue(':date', $_POST['date']);
	$insertad->bindValue(':name', $_POST['name']);
	$insertad->bindValue(':email', $_POST['email']);
	$insertad->bindValue(':number', $_POST['number']);
	$insertad->bindValue(':categoryid', $_POST['category']);
	$insertad->execute();

	$id = $_POST['id'];

    if ($_POST['vk']) {

        $sqlid = $pdo->prepare("SELECT count(id) FROM ads");
        $sqlid->execute();
        $sqlid = $sqlid->fetchColumn();
        $vkid = $sqlid;
    
        $sqlcategory = $pdo->prepare('SELECT name FROM categories WHERE id = :id');
        $sqlcategory->bindValue('id', $_POST['category']);
        $sqlcategory->execute();
        $postingcategory = $sqlcategory->fetch();

        $access_token = '8d560009d5952aaebb8ba86c91f86f1e9fd643fb912ac10faa69ab0d7af95736e7d6e7e31aca5dcc84b37';
        $owner_id = '-127555990';
        $link = 'https://gridcredit.ru/board/id/' . urlencode($vkid);

        $vkcategory = mb_strtolower(preg_replace('/\s/', '_', $postingcategory['name']));

        $message = urlencode('#' . $vkcategory . '@gridcredit

' . $_POST['title'] . '
' . $_POST['text'] . '

. Подробнее по ссылке ниже! ');

        $query = file_get_contents('https://api.vk.com/method/wall.post?owner_id=' . $owner_id . '&access_token=' . $access_token . '&message=' . $message . '&attachment=' . $link);

        header('Location: /admin/board/delete?id=' . $id);
        exit();
    }
    else {
    	header('Location: /admin/board/delete?id=' . $id);
	    exit();
    }
} catch (Exception $e) {}
?>