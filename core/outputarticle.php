<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';

try {
	$articlescount = $pdo->prepare("SELECT count(id) FROM ads");
    $articlescount->execute();
    $articlescount = $articlescount->fetchColumn();

    $getarticle = isset($_GET['id']) ? $_GET['id'] : 1;
    $articledata = array(
        'options' => array(
            'default' => $articlescount, 
            'min_range' => 1,
            'max_range' => $articlescount
        )
    );

    $articlenumber = trim($getarticle);
    $articlenumber = filter_var($articlenumber, FILTER_VALIDATE_INT, $articledata);

    $articlesql = $pdo->prepare("SELECT id, date_format(date, '%d %M %Y') as date, title, text, views FROM articles WHERE id = :id");
    $articlesql->bindParam(':id', $articlenumber, PDO::PARAM_INT);
    $articlesql->execute();
    $article = $articlesql->fetch();

    $views = $article['views'] + 1;

    $updateviews = $pdo->prepare("UPDATE articles SET views = :views WHERE id = :id");
    $updateviews->bindParam(':views', $views, PDO::PARAM_INT);
    $updateviews->bindParam(':id', $articlenumber, PDO::PARAM_INT);
    $updateviews->execute();

} catch (Exception $e) {}
?>