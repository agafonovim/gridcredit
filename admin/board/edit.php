<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/system/functions.php';
  include_once $_SERVER['DOCUMENT_ROOT'] . '/admin/system/addad.php';
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

    <title>Редактирование объявления</title>

    <link href="/admin/assets/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1><small>Панель администратора [<?php echo $_SESSION['login']; ?>]</small></h1>
        <a class="btn btn-success" href="/admin/board" role="button">Назад</a>
        <a class="btn btn-info" href="/admin/board/premium" role="button">Премиум-объявления</a>
      </div>
      <form class="form-horizontal" action="" method="POST">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Контактные данные</h3>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Контактное лицо</label>
              <div class="col-sm-10">
                <input id="name" type="text" maxlength="65" class="form-control" name="name" value="<?php echo htmlspecialchars($ad['name'], ENT_QUOTES, 'UTF-8'); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Ваш E-Mail</label>
              <div class="col-sm-10">
                <input id="email" type="email" maxlength="60" class="form-control" name="email" value="<?php echo htmlspecialchars($ad['email'], ENT_QUOTES, 'UTF-8'); ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="number" class="col-sm-2 control-label">Ваш номер</label>
              <div class="col-sm-10">
                <input type="text" maxlength="20" class="form-control" id="number" name="number" value="<?php echo htmlspecialchars($ad['number'], ENT_QUOTES, 'UTF-8'); ?>" title="Формат: +7 (000) 000-00-00" placeholder="+7 (___) ___-__-__">
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Заголовок</label>
              <div class="col-sm-10">
                <input name="title" value="<?php echo htmlspecialchars($ad['title'], ENT_QUOTES, 'UTF-8'); ?>" id="title" type="text" maxlength="150" class="form-control" placeholder="Текст заголовка" required>
              </div>
            </div>
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Текст</label>
              <div class="col-sm-10">
                <textarea name="text" id="text" class="form-control" maxlength="3072" style="max-width: 918px; min-width: 10px; min-height: 100px;" placeholder="Текст объявления" required><?php echo htmlspecialchars($ad['text'], ENT_QUOTES, 'UTF-8'); ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Выберите категорию</label>
              <div class="col-sm-10">
                <select name="category" id="category" class="form-control" required>
                  <option value="">Выбрать</option>
                  <?php foreach ($categories as $categories): ?>
                  <option value="<?php echo $categories['id']; ?>"<?php if ($categories['id'] == $ad['category']) { echo ' selected'; } ?>><?php echo htmlspecialchars($categories['name'], ENT_QUOTES, 'UTF-8'); ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" type="checkbox" name="vk" id="vk" value="yes"> Запостить ВКонтакте
                  </label>
                </div>
              </div>
            </div>
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($ad['id'], ENT_QUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="date" value="<?php echo htmlspecialchars($ad['date'], ENT_QUOTES, 'UTF-8'); ?>">
            <div class="text-center list-inline" style="margin-bottom: 10px;">
                <button class="btn btn-primary" style="outline: none;" type="submit">Опубликовать объявление</button>
                <a class="btn btn-danger" href="/admin/board/delete?id=<?php echo htmlspecialchars($ad['id'], ENT_QUOTES, 'UTF-8'); ?>" style="outline: none;">Удалить</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>