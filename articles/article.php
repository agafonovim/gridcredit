<?php $articlespage = 'yes'; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/outputarticle.php'; ?>
<!doctype html>
<html>

  <head>
    <title><?php echo htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8'); ?> — Читайте на портале ГридКредит</title>
    <meta name="description" content="Прочитать статью '<?php echo htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8'); ?>' и многие другие, Вы можете на портале ГридКредит!">
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
            <h1 class="collection-title">Статья</h1>
            <i class="newspaper icon collection-icon grey"></i>
          </div>
          <div class="collection-body">
            <div class="article-section">
              <div class="article-section-header">
                <h2  class="article-section-title"><?php echo htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
              </div>
              <div class="article-section-txt">
                <?php echo $article['text']; ?>
              </div>
              <div class="article-section-footer">
                <div class="article-section-info">
                  <span class="article-section-views"><i class="unhide icon"></i><?php echo htmlspecialchars($article['views'], ENT_QUOTES, 'UTF-8'); ?></span>
                  <span class="article-section-date"><i class="calendar icon"></i><?php echo htmlspecialchars($article['date'], ENT_QUOTES, 'UTF-8'); ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/footer.php'; ?>
  </body>

</html>