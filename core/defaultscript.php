<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';

try {
    $defaultcount = $pdo->prepare("SELECT count(id) FROM ads WHERE premium LIKE 'no'");
    $defaultcount->execute();
    $defaultcount = $defaultcount->fetchColumn();

    $defaultsperpage = 10;
    $defaultpages = ceil($defaultcount / $defaultsperpage);

    $getdefaultpage = isset($_GET['page']) ? $_GET['page'] : 1;
    $defaultdata = array(
        'options' => array(
            'default' => 1, 
            'min_range' => 1,
            'max_range' => $defaultpages
        )
    );

    $defaultpagenumber = trim($getdefaultpage);
    $defaultpagenumber = filter_var($defaultpagenumber, FILTER_VALIDATE_INT, $defaultdata);
    $defaultrange = $defaultsperpage * ($defaultpagenumber - 1);

    $defaultsql = $pdo->prepare("SELECT ads.id, title, text, date_format(date, '%d %M %Y') as date, categories.name as category, categories.link as link, views FROM ads INNER JOIN categories ON ads.category = categories.id WHERE ads.premium LIKE 'no' ORDER BY ads.id DESC LIMIT :limit, :perpage");
    $defaultsql->bindParam(':perpage', $defaultsperpage, PDO::PARAM_INT);
    $defaultsql->bindParam(':limit', $defaultrange, PDO::PARAM_INT); 
    $defaultsql->execute();
    $defaultsql = $defaultsql->fetchAll();

    $defaultprev = $defaultpagenumber - 1;
    $defaultnext = $defaultpagenumber + 1; 

    foreach ($defaultsql as $row) {
    	$defaultad[] = array(
    		'id'=> $row['id'],
    		'title'=> $row['title'],
    		'text'=> $row['text'],
            'date'=> $row['date'],
            'category'=> $row['category'],
            'link'=> $row['link'],
            'views'=> $row['views']
    		);
    }
} catch (Exception $e) {}
?>