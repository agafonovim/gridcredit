<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/system/functions.php';
  require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/system/updatecategory.php';
?>
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

    <title>Изменение категории</title>

    <link href="/admin/assets/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1><small>Панель администратора [<?php echo $_SESSION['login']; ?>]</small></h1>
        <a class="btn btn-success" href="/admin/categories" role="button">Назад</a>
      </div>
      <form action="" method="POST">
        <div class="form-group">
          <label class="sr-only" for="name">Название категории</label>
          <input class="form-control" id="name" name="name" placeholder="Название категории" value="<?php echo htmlspecialchars($category['name'], ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <div class="form-group">
          <label class="sr-only" for="link">Ссылка для сайдбара</label>
          <input class="form-control" id="link" name="link" placeholder="Ссылка для сайдбара" value="<?php echo htmlspecialchars($category['link'], ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
          <input type="hidden" name="id" value="<?php echo htmlspecialchars($category['id'], ENT_QUOTES, 'UTF-8'); ?>">
          <button type="submit" class="btn btn-default">Изменить</button>
      </form>
    </div>
  </body>
</html>