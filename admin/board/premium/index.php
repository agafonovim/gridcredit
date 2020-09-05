<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/system/functions.php';
  require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/system/addpremium.php';
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

    <title>Премиум-объявления</title>

    <link href="/admin/assets/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1><small>Панель администратора [<?php echo $_SESSION['login']; ?>]</small></h1>
        <a class="btn btn-success" href="/admin/board" role="button">Назад</a>
      </div>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Заголовок</th>
            <th>Имя</th>
            <th>E-Mail</th>
            <th>Редактировать</th>
            <th>Удалить</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($premiumads as $premiumads): ?>
          <tr>
            <th score="row">
              <?php echo htmlspecialchars($premiumads['id'], ENT_QUOTES, 'UTF-8'); ?>
            </th>
            <td style="max-width: 300px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
              <a href="/board/id/<?php echo htmlspecialchars($premiumads['id'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank">
                <?php echo htmlspecialchars($premiumads['title'], ENT_QUOTES, 'UTF-8'); ?>
              </a>
            </td>
            <td>
              <?php echo htmlspecialchars($premiumads['name'], ENT_QUOTES, 'UTF-8'); ?>
            </td>
            <td>
              <?php echo htmlspecialchars($premiumads['email'], ENT_QUOTES, 'UTF-8'); ?>
            </td>
            <td>
              <a class="btn btn-primary btn-xs" href="/admin/board/premium/edit?id=<?php echo htmlspecialchars($premiumads['id'], ENT_QUOTES, 'UTF-8'); ?>">Редактировать</a>
            </td>
            <td>
              <a class="btn btn-danger btn-xs" href="/admin/board/premium/delete?id=<?php echo htmlspecialchars($premiumads['id'], ENT_QUOTES, 'UTF-8'); ?>">Удалить</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <div class="page-header">
        <h4>Добавление премиум-объявления</h4>
      </div>
      <form action="" method="POST">
        <div class="form-group">
          <label class="sr-only" for="id">ID объявления</label>
          <input class="form-control" id="id" name="id" placeholder="ID объявления" required>
        </div>
        <button type="submit" class="btn btn-default">Добавить</button>
      </form>
      <br>
    </div>
  </body>
</html>