      <div class="sidebar">
        <div class="sidebar-sector">
            <div class="sidebar-sector-title">
              Категории
            </div>
            <div class="sidebar-categories">
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/core/sidebar_categories.php'; foreach ($sidebar_categories as $sidebar_categories): ?>
            	<a href="<?php echo htmlspecialchars($sidebar_categories['link'], ENT_QUOTES, 'UTF-8'); ?>" class="sidebar-categories-item"><?php echo htmlspecialchars($sidebar_categories['name'], ENT_QUOTES, 'UTF-8'); ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="sidebar-sector">
            <div class="sidebar-sector-title">
              Статьи
            </div>
            <div class="sidebar-articles">
                <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/core/sidebar_articles.php'; foreach ($sidebar_articles as $sidebar_articles): ?>
            	<a href="/articles/id/<?php echo htmlspecialchars($sidebar_articles['id'], ENT_QUOTES, 'UTF-8'); ?>" class="sidebar-articles-item truncate"><i class="angle right icon black"></i><?php echo htmlspecialchars($sidebar_articles['title'], ENT_QUOTES, 'UTF-8'); ?></a>
                <?php endforeach; ?>
            	<a href="/articles/" class="sidebar-articles-item">Все статьи</a>
            </div>
        </div>
      </div>