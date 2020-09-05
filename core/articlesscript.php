<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';

try {
    $articlescount = $pdo->prepare("SELECT count(id) FROM articles");
    $articlescount->execute();
    $articlescount = $articlescount->fetchColumn();

    $articlesperpage = 10;
    $articlespages = ceil($articlescount / $articlesperpage);

    $getarticlespage = isset($_GET['page']) ? $_GET['page'] : 1;
    $articlesdata = array(
        'options' => array(
            'default' => 1, 
            'min_range' => 1,
            'max_range' => $articlespages
        )
    );

    $articlespagenumber = trim($getarticlespage);
    $articlespagenumber = filter_var($articlespagenumber, FILTER_VALIDATE_INT, $articlesdata);
    $articlesrange = $articlesperpage * ($articlespagenumber - 1);

    $articlessql = $pdo->prepare("SELECT id, title, text, date_format(date, '%d %M %Y') as date, views FROM articles ORDER BY id DESC LIMIT :limit, :perpage");
    $articlessql->bindParam(':perpage', $articlesperpage, PDO::PARAM_INT);
    $articlessql->bindParam(':limit', $articlesrange, PDO::PARAM_INT); 
    $articlessql->execute();
    $articlessql = $articlessql->fetchAll();

    $articlesprev = $articlespagenumber - 1;
    $articlesnext = $articlespagenumber + 1; 

    foreach ($articlessql as $row) {
    	$articles[] = array(
    		'id'=> $row['id'],
    		'title'=> $row['title'],
    		'text'=> $row['text'],
            'date'=> $row['date'],
            'views'=> $row['views']
    		);
    }
} catch (Exception $e) {}
?>