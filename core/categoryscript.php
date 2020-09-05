<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';

try {
    $getcategory = isset($_GET['id']) ? $_GET['id'] : 1;

    $categoriescount = $pdo->prepare("SELECT count(id) FROM categories");
    $categoriescount->execute();
    $categoriescount = $categoriescount->fetchColumn();

    $categoriesdata = array(
        'options' => array(
            'default'   => 1,
            'min_range' => 1,
            'max_range' => $categoriescount
            )
    );
    $categorynumber = trim($getcategory);
    $categorynumber = filter_var($categorynumber, FILTER_VALIDATE_INT, $categoriesdata);

    $categoryname = $pdo->prepare("SELECT name FROM categories WHERE id = :id");
    $categoryname->bindParam('id', $categorynumber, PDO::PARAM_INT);
    $categoryname->execute();
    $categoryname = $categoryname->fetch();

    $defaultcount = $pdo->prepare("SELECT count(id) FROM ads WHERE premium LIKE 'no' AND category = :categoryid");
    $defaultcount->bindParam('categoryid', $categorynumber, PDO::PARAM_INT);
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

    $defaultsql = $pdo->prepare("SELECT ads.id, title, text, date_format(date, '%d %M %Y') as date, categories.name as category, categories.link as link, views FROM ads INNER JOIN categories ON ads.category = categories.id WHERE ads.category = :id AND ads.premium LIKE 'no' ORDER BY ads.id DESC LIMIT :limit, :perpage");
    $defaultsql->bindValue('id', $categorynumber);
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