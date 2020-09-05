<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/system/functions.php';
  require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/system/addedads.php';
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

    <title>Объявления</title>

    <link href="/admin/assets/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1><small>Панель администратора [<?php echo $_SESSION['login']; ?>]</small></h1>
        <a class="btn btn-success" href="/admin" role="button">Назад</a>
        <a class="btn btn-info" href="/admin/board/premium" role="button">Премиум-объявления</a>
      </div>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Заголовок</th>
            <th>Имя</th>
            <th>E-Mail</th>
            <th>Телефон</th>
            <th>Редактирование</th>
            <th>Удаление</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($ads as $ads): ?>
          <tr>
            <th score="row">
              <?php echo htmlspecialchars($ads['id'], ENT_QUOTES, 'UTF-8'); ?>
            </th>
            <td style="max-width: 300px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
              <?php echo htmlspecialchars($ads['title'], ENT_QUOTES, 'UTF-8'); ?>
            </td>
            <td style="max-width: 200px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
              <?php echo htmlspecialchars($ads['name'], ENT_QUOTES, 'UTF-8'); ?>
            </td>
            <td style="max-width: 200px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
              <?php echo htmlspecialchars($ads['email'], ENT_QUOTES, 'UTF-8'); ?>
            </td>
            <td style="min-width: 140px;">
              <?php echo htmlspecialchars($ads['number'], ENT_QUOTES, 'UTF-8'); ?>
            </td>
            <td><a class="btn btn-primary btn-xs" href="/admin/board/edit?id=<?php echo htmlspecialchars($ads['id'], ENT_QUOTES, 'UTF-8'); ?>" role="button">Редактировать</a></td>
            <td><a class="btn btn-danger btn-xs" href="/admin/board/delete?id=<?php echo htmlspecialchars($ads['id'], ENT_QUOTES, 'UTF-8'); ?>" role="button">Удалить</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </body>
</html>