<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/addscript.php'; ?>
<!doctype html>
<html>

  <head>
    <title>Добавление объявления</title>
    <meta name="description" content="Добавить своё объявление на кредитную доску портала ГридКредит можно прямо сейчес!">
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/head.php'; ?>
  </head>
  <body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/navbar.php'; ?>
    <div class="container">
      <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/sidebar.php'; ?>
      <div class="main">
        <div class="collection">
          <div class="collection-header">
            <h1 class="collection-title">Добавление объявления</h1>
            <i class="add circle icon collection-icon green"></i>
          </div>
          <div class="collection-body">
            <div class="add-message">
              Cначала, в порядке очереди, объявление проходит через редакцию.<br>
              <strong>Повторяющиеся объявления будут удаляться!</strong>
            </div>
            <form class="addform" action="" method="POST" id="form">
              <label for="name">Контактное лицо</label>
              <input placeholder="Как к Вам можно обращаться?" id="name" name="name" maxlength="30" type="text" required>
              <label for="email">Ваша электронная почта</label>
              <input placeholder="Ваш e-mail адрес" type="email" id="email" name="email" maxlength="40" type="text" required>
              <label for="number">Ваш номер телефона</label>
              <input placeholder="+7 (___) ___-__-__" id="number" title="Формат: +7 (000) 000-00-00" name="number" maxlength="20" type="text" required>
              <div class="addform-ad">
                <label for="title">Текст заголовка</label>
                <input id="title" name="title" maxlength="150" type="text" required>
                <label for="text">Текст объявления</label>
                <textarea id="text" name="text" maxlength="3500" type="text" required></textarea>
                <span class="addform-help">В тексте объявления не должно содержаться контактных данных</span>
              </div>
              <label for="category">Выберите категорию</label>
              <select id="category" name="category" required>
                <option value="">Выберите один из пунктов списка</option>
                <?php foreach ($categoryselect as $categoryselect): ?>
                <option value="<?php echo htmlspecialchars($categoryselect['id'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($categoryselect['name'], ENT_QUOTES, 'UTF-8'); ?></option>
                <?php endforeach; ?>
              </select>
              <input class="submit-button" type="submit" value="Отправить в редакцию!">
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/footer.php'; ?>
    <script src="/core/tmp/assets/js/jquery.js" type="text/javascript"></script>
    <script src="/core/tmp/assets/js/jquery.maskedinput.js" type="text/javascript"></script>
    <script type="text/javascript">
      $("#number").mask("+7 (999) 999-99-99");
    </script>
  </body>

</html>