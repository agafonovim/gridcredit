<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';

try {
    $premiumcount = $pdo->prepare("SELECT count(id) FROM ads WHERE premium LIKE 'yes'");
    $premiumcount->execute();
    $premiumcount = $premiumcount->fetchColumn();

    $premiumsql = $pdo->prepare("SELECT ads.id, title, ads.name, ads.number, email, text, date_format(date, '%d %M %Y') as date, categories.name as category, categories.link as link, views FROM ads INNER JOIN categories ON ads.category = categories.id LEFT JOIN premium_ads ON ads.id = premium_ads.id WHERE ads.premium LIKE 'yes' ORDER BY premium_ads.number ASC");
    $premiumsql->execute();
    $premiumsql = $premiumsql->fetchAll();

    foreach ($premiumsql as $row) {
    	$premiumad[] = array(
    		'id'=> $row['id'],
    		'title'=> $row['title'],
    		'text'=> $row['text'],
            'date'=> $row['date'],
            'name'=> $row['name'],
            'number'=> $row['number'],
            'email'=> $row['email'],
            'category'=> $row['category'],
            'link'=> $row['link'],
            'views'=> $row['views']
    		);
    }
} catch (Exception $e) {}
?>