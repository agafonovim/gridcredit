<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';

try {
	$adscount = $pdo->prepare("SELECT count(id) FROM ads");
    $adscount->execute();
    $adscount = $adscount->fetchColumn();

    $getad = isset($_GET['id']) ? $_GET['id'] : 1;
    $addata = array(
        'options' => array(
            'default' => $adscount, 
            'min_range' => 1,
            'max_range' => $adscount
        )
    );

    $adnumber = trim($getad);
    $adnumber = filter_var($adnumber, FILTER_VALIDATE_INT, $addata);

    $adsql = $pdo->prepare("SELECT ads.id, title, text, date_format(date, '%d %M %Y') as date, categories.name as category, ads.category as similarcategory, categories.link as link, views, ads.name as name, email, number, premium FROM ads INNER JOIN categories ON ads.category = categories.id WHERE ads.id = :id");
    $adsql->bindParam(':id', $adnumber, PDO::PARAM_INT);
    $adsql->execute();
    $ad = $adsql->fetch();

    $views = $ad['views'] + 1;

    $updateviews = $pdo->prepare("UPDATE ads SET views = :views WHERE id = :id");
    $updateviews->bindParam(':views', $views, PDO::PARAM_INT);
    $updateviews->bindParam(':id', $adnumber, PDO::PARAM_INT);
    $updateviews->execute();


    $sqlsimilarads = $pdo->prepare("SELECT ads.id as id, title, text FROM ads WHERE ads.premium LIKE 'no' AND ads.category = :category AND id NOT LIKE :similarid ORDER BY ads.id DESC LIMIT 5");
    $sqlsimilarads->bindParam(':category', $ad['similarcategory'], PDO::PARAM_INT);
    $sqlsimilarads->bindParam(':similarid', $ad['id'], PDO::PARAM_INT);
    $sqlsimilarads->execute();
    $sqlsimilarads = $sqlsimilarads->fetchAll();

    foreach ($sqlsimilarads as $row) {
        $similarads[] = array(
            'id'=> $row['id'],
            'title'=> $row['title'],
            'text'=> $row['text']
            );
    }
} catch (Exception $e) {}
?>