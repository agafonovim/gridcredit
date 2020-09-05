<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';

try {
    $maindefaultsql = $pdo->prepare("SELECT ads.id as id, title, text, date_format(date, '%d %M %Y') as date, categories.name as category, categories.link as link, views FROM ads INNER JOIN categories ON ads.category = categories.id WHERE ads.premium LIKE 'no' ORDER BY ads.id DESC LIMIT 3");
    $maindefaultsql->execute();
    $maindefaultsql = $maindefaultsql->fetchAll();

    foreach ($maindefaultsql as $row) {
    	$maindefaultad[] = array(
    		'id'=> $row['id'],
    		'title'=> $row['title'],
    		'text'=> $row['text'],
            'date'=> $row['date'],
            'category'=> $row['category'],
            'link'=> $row['link'],
            'views'=> $row['views']
    		);
    }

    $mainarticlessql = $pdo->prepare("SELECT id, title, text, date_format(date, '%d %M %Y') as date, views FROM articles ORDER BY views DESC LIMIT 3");
    $mainarticlessql->execute();
    $mainarticlessql = $mainarticlessql->fetchAll();

    foreach ($mainarticlessql as $row) {
        $mainarticles[] = array(
            'id'=> $row['id'],
            'title'=> $row['title'],
            'text'=> $row['text'],
            'date'=> $row['date'],
            'views'=> $row['views']
            );
    }
} catch (Exception $e) {}
?>