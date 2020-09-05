<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/mainscript.php'; ?>
<?php $indexpage = 'yes'; ?>
<!doctype html>
<html>

  <head>
    <title>ГридКредит · Финансово-кредитный портал</title>
    <meta name="description" content="Портал финансово-кредитной тематики, у нас Вы сможете найти объявления помощи в получении кредита, даже с плохой кредитной историей">
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/head.php'; ?>
  </head>
  <body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/navbar.php'; ?>
    <div class="container">
      <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/sidebar.php'; ?>
      <div class="main">
        <?php session_start(); if($_SESSION['sended'] or ($_SESSION['login'])): ?>
        <div class="success-send">
          <i class="checkmark icon huge"></i>
          Поздравляем, Ваше объявление отправлено в редакцию!<br>
        </div>
        <?php endif; unset($_SESSION['sended']); session_destroy($_SESSION['sended']); ?>
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/premium.php'; ?>
        <div class="collection">
          <div class="collection-header">
            <h1 class="collection-title">Популярные статьи</h1>
            <i class="newspaper icon collection-icon grey"></i>
          </div>
          <div class="collection-body">
            <div class="main-article-section">
              <?php foreach ($mainarticles as $mainarticles): ?>
              <a href="/articles/id/<?php echo htmlspecialchars($mainarticles['id'], ENT_QUOTES, 'UTF-8'); ?>" class="main-article-section-item">
                <h2 class="main-article-section-title"><?php echo htmlspecialchars($mainarticles['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                <p class="main-article-section-txt"><?php echo substr(rtrim(strip_tags(substr($mainarticles['text'], 0, 350)), "!,.-"), 0, strrpos(rtrim(strip_tags(substr($mainarticles['text'], 0, 350)), "!,.-"), ' ')).' ...'; ?></p>
              </a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <div class="collection">
          <div class="collection-header">
            <h1 class="collection-title">Последние объявления</h1>
            <i class="content icon collection-icon black"></i>
          </div>
          <div class="collection-body">
            <?php foreach ($maindefaultad as $maindefaultad): ?>
            <div class="default-section">
              <div class="default-section-header">
                <h2  class="default-section-title"><a href="/board/id/<?php echo htmlspecialchars($maindefaultad['id'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($maindefaultad['title'], ENT_QUOTES, 'UTF-8'); ?></a></h2>
              </div>
              <p class="default-section-txt"><?php echo nl2br(htmlspecialchars($maindefaultad['text'], ENT_QUOTES, 'UTF-8')); ?></p>
              <div class="default-section-footer">
                <div class="default-section-info">
                  <span class="default-section-views"><i class="unhide icon"></i><?php echo htmlspecialchars($maindefaultad['views'], ENT_QUOTES, 'UTF-8'); ?></span>
                  <span class="default-section-category"><i class="unordered list icon"></i><a href="<?php echo htmlspecialchars($maindefaultad['link'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($maindefaultad['category'], ENT_QUOTES, 'UTF-8'); ?></a></span>
                  <span class="default-section-date"><i class="calendar icon"></i><?php echo htmlspecialchars($maindefaultad['date'], ENT_QUOTES, 'UTF-8'); ?></span>
                </div>
                <a href="/board/id/<?php echo htmlspecialchars($maindefaultad['id'], ENT_QUOTES, 'UTF-8'); ?>" class="default-section-button">Подробнее</a>
              </div>
            </div>
            <?php endforeach; ?>
            <a href="/board/page/1" class="main-allads-button">Смотреть все объявления</a>
          </div>
        </div>
      </div>
    </div>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/footer.php'; ?>
  </body>

</html>