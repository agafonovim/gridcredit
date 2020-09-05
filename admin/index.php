<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/system/functions.php'; ?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/core/tmp/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/core/tmp/assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/core/tmp/assets/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/core/tmp/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/core/tmp/assets/img/favicons/safari-pinned-tab.svg" color="#75c078">
    <meta name="theme-color" content="#ffffff">

    <title>Панель администратора</title>

    <link href="/admin/assets/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1><small>Панель администратора [<?php echo $_SESSION['login']; ?>]</small></h1>
        <a class="btn btn-success" href="/" target="_blank" role="button">На главную страницу</a>
      </div>
      <div class="list-group">
        <a href="/admin/board" class="list-group-item">
          <h4 class="list-group-item-heading">Объявления</h4>
          <p class="list-group-item-text">Удаление, редактирование и добавление объявлений</p>
        </a>
        <a href="/admin/articles" class="list-group-item">
          <h4 class="list-group-item-heading">Статьи</h4>
          <p class="list-group-item-text">Удаление, добавление и редактирование статей</p>
        </a>
        <a href="/admin/categories" class="list-group-item">
          <h4 class="list-group-item-heading">Категории</h4>
          <p class="list-group-item-text">Удаление, добавление, редактирование категорий</p>
        </a>
        <br>
        <a class="btn btn-default" href="/admin/?do=logout" role="button">Выйти</a>
      </div>
    </div>
  </body>
</html>