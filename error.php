<?php
$number = $_GET['id'];
if ($number == '400') {
    $title = '400 — Неверный запрос';
}
else {
    if ($number == '403') {
    $title = '403 — Доступ к ресурсу запрещен';
    }
    else {
        if ($number == '404') {
        $title = '404 — Ресурс не найден';
        }
        else {
            if ($number == '500') {
            $title = '500 — Внутренняя ошибка сервера';
            header('HTTP/1.1 500 Internal Server Error');
            }
            else {
                $title = '404 — Ресурс не найден';
            }
        }
    }
}
?>
<!doctype html>
<html>

  <head>
    <title>
      <?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>
    </title>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/head.php'; ?>
  </head>
  <body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/navbar.php'; ?>
    <div class="container">
      <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/sidebar.php'; ?>
      <div class="main">
        <div class="collection">
          <div class="collection-header">
            <h1 class="collection-title"><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></h1>
            <i class="remove icon collection-icon red"></i>
          </div>
        </div>
        <div class="collection">
          <div class="pagination">
            <a href="javascript:history.go(-1)" class="previous">&lt; Назад</a>
            <a href="https://gridcredit.ru" class="next">На главную</a>
          </div>
        </div>
      </div>
    </div>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/footer.php'; ?>
  </body>

</html>