<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/premiumscript.php'; if($premiumcount > 0): ?>    
        <div class="collection">
          <div class="collection-header">
            <h1 class="collection-title">Премиум-объявления</h1>
            <i class="star icon collection-icon yellow"></i>
          </div>
          <div class="collection-body">
          <?php foreach ($premiumad as $premiumad): ?>
            <div class="premium-section">
              <div class="premium-section-header">
                <h2 class="premium-section-title"><a href="/board/id/<?php echo htmlspecialchars($premiumad['id'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($premiumad['title'], ENT_QUOTES, 'UTF-8'); ?></a></h2>
              </div>
              <p class="premium-section-txt">
              <?php echo nl2br($premiumad['text']); ?>
              <?php if (!($premiumad['email'] === '')): ?>
              <strong style="display: block; text-decoration: underline; line-height: 20px;">
              Контактное лицо: <?php echo htmlspecialchars($premiumad['name'], ENT_QUOTES, 'UTF-8'); ?><br>
              Электронная почта: <?php echo htmlspecialchars($premiumad['email'], ENT_QUOTES, 'UTF-8'); ?><br>
              Номер телефона: <?php echo htmlspecialchars($premiumad['number'], ENT_QUOTES, 'UTF-8'); ?><br>
              </strong>
              <?php endif; ?>
              </p>
              <div class="premium-section-footer">
                <div class="premium-section-info">
                  <span class="premium-section-views"><i class="unhide icon"></i><?php echo htmlspecialchars($premiumad['views'], ENT_QUOTES, 'UTF-8'); ?></span>
                  <span class="premium-section-category"><i class="unordered list icon"></i><a href="<?php echo htmlspecialchars($premiumad['link'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($premiumad['category'], ENT_QUOTES, 'UTF-8'); ?></a></span>
                  <span class="premium-section-date"><i class="calendar icon"></i><?php echo htmlspecialchars($premiumad['date'], ENT_QUOTES, 'UTF-8'); ?></span>
                </div>
                <a href="/board/id/<?php echo htmlspecialchars($premiumad['id'], ENT_QUOTES, 'UTF-8'); ?>" class="premium-section-button">Подробнее</a>
              </div>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
<?php endif; ?>