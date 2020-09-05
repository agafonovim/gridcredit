<?php $articlespage = 'yes'; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/articlesscript.php'; ?>
<!doctype html>
<html>

  <head>
    <title>Интересные статьи на портале ГридКредит</title>
    <meta name="description" content="Сборник материалов финансово-кредитной тематики на портале ГридКредит">
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/head.php'; ?>
    <link rel="stylesheet" href="/core/tmp/assets/css/typography.css">
  </head>
  <body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/navbar.php'; ?>
    <div class="container">
      <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/sidebar.php'; ?>
      <div class="main">
        <div class="collection">
          <div class="collection-header">
            <h1 class="collection-title">Статьи</h1>
            <i class="newspaper icon collection-icon grey"></i>
          </div>
          <div class="collection-body">
            <?php foreach ($articles as $articles): ?>
            <div class="article-section">
              <div class="article-section-header">
                <h2  class="article-section-title"><a href="/board/id/<?php echo htmlspecialchars($articles['id'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($articles['title'], ENT_QUOTES, 'UTF-8'); ?></a></h2>
              </div>
              <div class="article-section-txt">
                <?php
                  $string = $articles['text'];
                  $string = substr($string, 0, 1100);
                  $string = rtrim($string, "!,.-");
                  $string = substr($string, 0, strrpos($string, ' '));
                  echo $string . ' ...';
                ?>
              </div>
              <div class="article-section-footer">
                <div class="article-section-info">
                  <span class="article-section-views"><i class="unhide icon"></i><?php echo htmlspecialchars($articles['views'], ENT_QUOTES, 'UTF-8'); ?></span>
                  <span class="article-section-date"><i class="calendar icon"></i><?php echo htmlspecialchars($articles['date'], ENT_QUOTES, 'UTF-8'); ?></span>
                </div>
                <a href="/articles/id/<?php echo htmlspecialchars($articles['id'], ENT_QUOTES, 'UTF-8'); ?>" class="article-section-button">Читать далее</a>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <!--
        <?php if ($articlespagenumber <= 1): ?>
        <div class="collection">
          <div class="pagination">
            <a class="previous disable">&lt; Новее</a>
            <a href="/articles/page/<?php echo $articlesnext ?>" class="next">Старее &gt;</a>
          </div>
        </div>
        <?php elseif ($articlespagenumber >= $articlespages): ?>
        <div class="collection">
          <div class="pagination">
            <a href="/articles/page/<?php echo $articlesprev ?>" class="previous">&lt; Новее</a>
            <a class="next disable">Старее &gt;</a>
          </div>
        </div>
        <?php else: ?>
        <div class="collection">
          <div class="pagination">
            <a href="/articles/page/<?php echo $articlesprev ?>" class="previous">&lt; Новее</a>
            <a href="/articles/page/<?php echo $articlesnext ?>" class="next">Старее &gt;</a>
          </div>
        </div>
        <?php endif; ?>
        -->
      </div>
    </div>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/footer.php'; ?>
  </body>

</html>