<?php $boardpage = 'yes'; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/outputad.php'; ?>
<!doctype html>
<html>

  <head>
    <meta property="og:title" content="<?php echo htmlspecialchars($ad['title'], ENT_QUOTES, 'UTF-8'); ?> — Кредитное объявление на портале ГридКредит">
    <meta property="og:description" content="<?php echo htmlspecialchars($ad['text'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://gridcredit.ru/core/tmp/assets/img/adpagelogo.jpg">
    <meta property="og:site_name" content="ГридКредит.ру">
    <meta property="og:url" content="https://gridcredit.ru/board/id/<?php echo htmlspecialchars($ad['id'], ENT_QUOTES, 'UTF-8'); ?>">
    <title><?php echo htmlspecialchars($ad['title'], ENT_QUOTES, 'UTF-8'); ?> — Кредитное объявление на портале ГридКредит</title>
    <meta name="description" content="<?php echo htmlspecialchars($ad['text'], ENT_QUOTES, 'UTF-8'); ?>">
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/head.php'; ?>
  </head>
  <body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/navbar.php'; ?>
    <div class="container">
      <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/sidebar.php'; ?>
      <div class="main">
        <?php if ($ad['premium'] == 'yes'): ?>
        <div class="collection" itemscope itemtype="http://schema.org/Service">
          <div class="collection-header">
            <div class="collection-title">Премиум-объявление</div>
            <i class="star icon collection-icon yellow"></i>
          </div>
          <div class="collection-body">
            <div class="premium-section">
              <div class="premium-section-header">
                <h1 class="premium-section-title" itemprop="name"><?php echo htmlspecialchars($ad['title'], ENT_QUOTES, 'UTF-8'); ?></h1>
              </div>
              <p class="premium-section-txt" itemprop="description"><?php echo nl2br($ad['text']); ?></p>
              <?php if (!($ad['email'] === '') or !($ad['number'] === '') or !($ad['name'] === '')): ?>
              <table class="premium-infotable">
                <thead>
                  <tr>
                    <th>Контактное лицо</th>
                    <th>Электронная почта</th>
                    <th>Номер телефона</th>
                  </tr>
                </thead>
                <tbody itemscope itemtype="http://schema.org/Offer">
                  <tr itemprop="seller" itemscope itemtype="http://schema.org/Person">
                    <td data-label="Контактное лицо" itemprop="name"><?php echo htmlspecialchars($ad['name'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td data-label="Электронная почта" <?php if (!($ad['email'] === '')): ?> itemprop="email" id="emailCopy" style="cursor: pointer;" title="Нажмите, чтобы скопировать электронную почту" <?php endif; ?>><?php echo htmlspecialchars($ad['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td data-label="Номер телефона" <?php if (!($ad['number'] === '')): ?> itemprop="telephone"<?php endif; ?>><?php echo htmlspecialchars($ad['number'], ENT_QUOTES, 'UTF-8'); ?></td>
                  </tr>
                </tbody>
              </table>
              <?php endif; ?>
              <?php if (!($ad['email'] === '')): ?>
              <div class="copyblock" id="helpCopy" style="display: block;">Нажмите на электронную почту, чтобы её скопировать</div>
              <div class="copyblock" id="copyBlock" style="display: none;">Электронная почта скопирована</div>
              <?php endif; ?>
              <div class="premium-section-footer">
                <div class="premium-section-info">
                  <span class="premium-section-views"><i class="unhide icon"></i><?php echo htmlspecialchars($ad['views'], ENT_QUOTES, 'UTF-8'); ?></span>
                  <span class="premium-section-category" itemprop="category"><i class="unordered list icon"></i><a href="<?php echo htmlspecialchars($ad['link'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($ad['category'], ENT_QUOTES, 'UTF-8'); ?></a></span>
                  <span class="premium-section-date"><i class="calendar icon"></i><?php echo htmlspecialchars($ad['date'], ENT_QUOTES, 'UTF-8'); ?></span>
                </div>
              </div>
            </div>
            <div class="user-message">
              <strong>Остерегайтесь мошенников, будьте предельно внимательны!</strong><br>
              Тщательно проверяйте всю информацию, не стесняйтесь задавать много вопросов, не совершайте никаких предоплат. Оградите себя от злоумышленников!
            </div>
          </div>
        </div>
        <?php elseif ($ad['premium'] == 'no'): ?>
        <div class="collection" itemscope itemtype="http://schema.org/Service">
          <div class="collection-header">
            <div class="collection-title">Кредитное объявление</div>
            <i class="content icon collection-icon black"></i>
          </div>
          <div class="collection-body">
            <div class="default-section">
              <div class="default-section-header">
                <h1 class="default-section-title" itemprop="name"><?php echo htmlspecialchars($ad['title'], ENT_QUOTES, 'UTF-8'); ?></h1>
              </div>
              <p class="default-section-txt" itemprop="description"><?php echo nl2br(htmlspecialchars($ad['text'], ENT_QUOTES, 'UTF-8')); ?></p>
              <?php if (!($ad['email'] === '') or !($ad['number'] === '') or !($ad['name'] === '')): ?>
              <table class="default-infotable">
                <thead>
                  <tr>
                    <th>Контактное лицо</th>
                    <th>Электронная почта</th>
                    <th>Номер телефона</th>
                  </tr>
                </thead>
                <tbody itemscope itemtype="http://schema.org/Offer">
                  <tr itemprop="seller" itemscope itemtype="http://schema.org/Person">
                    <td data-label="Контактное лицо" itemprop="name"><?php echo htmlspecialchars($ad['name'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td data-label="Электронная почта" <?php if (!($ad['email'] === '')): ?> itemprop="email" id="emailCopy" style="cursor: pointer;" title="Нажмите, чтобы скопировать электронную почту" <?php endif; ?>><?php echo htmlspecialchars($ad['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td data-label="Номер телефона" <?php if (!($ad['number'] === '')): ?> itemprop="telephone"<?php endif; ?>><?php echo htmlspecialchars($ad['number'], ENT_QUOTES, 'UTF-8'); ?></td>
                  </tr>
                </tbody>
              </table>
              <?php endif; ?>
              <?php if (!($ad['email'] === '')): ?>
              <div class="copyblock" id="helpCopy" style="display: block;">Нажмите на электронную почту, чтобы её скопировать</div>
              <div class="copyblock" id="copyBlock" style="display: none;">Электронная почта скопирована</div>
              <?php endif; ?>
              <div class="default-section-footer">
                <div class="default-section-info">
                  <span class="default-section-views"><i class="unhide icon"></i><?php echo htmlspecialchars($ad['views'], ENT_QUOTES, 'UTF-8'); ?></span>
                  <span class="default-section-category" itemprop="category"><i class="unordered list icon"></i><a href="<?php echo htmlspecialchars($ad['link'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($ad['category'], ENT_QUOTES, 'UTF-8'); ?></a></span>
                  <span class="default-section-date"><i class="calendar icon"></i><?php echo htmlspecialchars($ad['date'], ENT_QUOTES, 'UTF-8'); ?></span>
                </div>
              </div>
            </div>
            <div class="user-message">
              <strong>Остерегайтесь мошенников, будьте предельно внимательны!</strong><br>
              Тщательно проверяйте всю информацию, не стесняйтесь задавать много вопросов, не совершайте никаких предоплат. Оградите себя от злоумышленников!
            </div>
          </div>
        </div>
      <?php endif; ?>
      <div class="collection">
        <div class="collection-header">
          <h1 class="collection-title">Похожие объявления</h1>
          <i class="pointing down icon collection-icon grey"></i>
        </div>
        <div class="collection-body">
          <div class="similar-ads-section">
            <?php foreach ($similarads as $similarads): ?>
            <a href="/board/id/<?php echo htmlspecialchars($similarads['id'], ENT_QUOTES, 'UTF-8'); ?>" class="similar-ads-section-item">
              <h2 class="similar-ads-section-title"><?php echo htmlspecialchars($similarads['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
              <p class="similar-ads-section-txt"><?php echo substr(rtrim(strip_tags(substr($similarads['text'], 0, 400)), "!,.-"), 0, strrpos(rtrim(strip_tags(substr($similarads['text'], 0, 400)), "!,.-"), ' ')).' ...'; ?></p>
            </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      </div>
    </div>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/footer.php'; ?>
    <?php if (!($ad['email'] === '')): ?>
    <script src="/core/tmp/assets/js/clipboard.min.js"></script>
    <script>
    (function (d) {
      'use strict';

      var emailElem = d.getElementById('emailCopy');
      emailElem.style.cursor = 'pointer';
      var emailClipboard = new Clipboard(emailElem, {
        text: function () {
          return '<?php echo htmlspecialchars($ad['email'], ENT_QUOTES, 'UTF-8'); ?>'
        }
      });
      emailClipboard.on('success', function(e) {
        d.getElementById('copyBlock').style.display = 'block';
        d.getElementById('helpCopy').style.display = 'none';
      });
      emailClipboard.on('error', function(e) {
        emailElem.style.cursor = 'text';
        console.error('Action:', e.action);
        console.error('Trigger:', e.trigger);
      });
    })(document);
  </script>
  <?php endif; ?>
  </body>
</html>