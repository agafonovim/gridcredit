<?php $boardpage = 'yes'; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/defaultscript.php'; ?>
<!doctype html>
<html>

  <head>
    <meta property="og:title" content="Доска кредитных объявлений на портале ГридКредит">
    <meta property="og:description" content="Кредитная доска объявлений. Популярные категории: помощь в получении кредита, кредит с плохой кредитной историей, частный и быстрый заём.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://gridcredit.ru/core/tmp/assets/img/adpagelogo.jpg">
    <meta property="og:site_name" content="ГридКредит.ру">
    <meta property="og:url" content="https://gridcredit.ru/board/page/<?php echo htmlspecialchars($defaultpagenumber, ENT_QUOTES, 'UTF-8'); ?>">
    <title>Доска кредитных объявлений на портале ГридКредит</title>
    <meta name="description" content="Кредитная доска объявлений. Популярные категории: помощь в получении кредита, кредит с плохой кредитной историей, частный и быстрый заём.">
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/head.php'; ?>
  </head>
  <body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/navbar.php'; ?>
    <div class="container">
      <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/sidebar.php'; ?>
      <div class="main">
       <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/premium.php'; ?>
        <div class="collection">
          <div class="collection-header">
            <h1 class="collection-title">Кредитные объявления</h1>
            <i class="content icon collection-icon black"></i>
          </div>
          <div class="collection-body">
            <?php foreach ($defaultad as $defaultad): ?>
            <div class="default-section">
              <div class="default-section-header">
                <h2  class="default-section-title"><a href="/board/id/<?php echo htmlspecialchars($defaultad['id'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($defaultad['title'], ENT_QUOTES, 'UTF-8'); ?></a></h2>
              </div>
              <p class="default-section-txt"><?php echo nl2br(htmlspecialchars($defaultad['text'], ENT_QUOTES, 'UTF-8')); ?></p>
              <div class="default-section-footer">
                <div class="default-section-info">
                  <span class="default-section-views"><i class="unhide icon"></i><?php echo htmlspecialchars($defaultad['views'], ENT_QUOTES, 'UTF-8'); ?></span>
                  <span class="default-section-category"><i class="unordered list icon"></i><a href="<?php echo htmlspecialchars($defaultad['link'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($defaultad['category'], ENT_QUOTES, 'UTF-8'); ?></a></span>
                  <span class="default-section-date"><i class="calendar icon"></i><?php echo htmlspecialchars($defaultad['date'], ENT_QUOTES, 'UTF-8'); ?></span>
                </div>
                <a href="/board/id/<?php echo htmlspecialchars($defaultad['id'], ENT_QUOTES, 'UTF-8'); ?>" class="default-section-button">Подробнее</a>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <?php if ($defaultpagenumber <= 1): ?>
        <div class="collection">
          <div class="pagination">
            <a class="previous disable">&lt; Новее</a>
            <a href="/board/page/<?php echo $defaultnext ?>" class="next">Старее &gt;</a>
          </div>
        </div>
        <?php elseif ($defaultpagenumber >= $defaultpages): ?>
        <div class="collection">
          <div class="pagination">
            <a href="/board/page/<?php echo $defaultprev ?>" class="previous">&lt; Новее</a>
            <a class="next disable">Старее &gt;</a>
          </div>
        </div>
        <?php else: ?>
        <div class="collection">
          <div class="pagination">
            <a href="/board/page/<?php echo $defaultprev ?>" class="previous">&lt; Новее</a>
            <a href="/board/page/<?php echo $defaultnext ?>" class="next">Старее &gt;</a>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/footer.php'; ?>
  </body>

</html>