<?php $advtpage = 'yes'; ?>
<!doctype html>
<html>

  <head>
    <title>Реклама</title>
    <meta name="description" content="Реклама на финансово-кредитном портале ГридКредит.">
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
            <h1 class="collection-title">Реклама</h1>
            <i class="star icon collection-icon green"></i>
          </div>
          <div class="collection-body">
            <div class="add-message">
              По любым рекламным вопросам обращайтесь на электронную почту: <strong>advt@gridcredit.ru</strong>
              <script type="text/javascript" src="//vk.com/js/api/openapi.js?146"></script>

              <!-- VK Widget -->
              <div id="vk_contact_us" style="margin-top: 10px;"></div>
              <script type="text/javascript">
              VK.Widgets.ContactUs("vk_contact_us", {text: "Вы можете написать нам ВКонтакте", height: 30}, -127555990);
              </script>
            </div>
            <!--
            <div class="advt-section-text">
              <strong>На данный момент доступно три вида платных объявлений:</strong>
              <ul>
                <li>Премиум-объявление на портале ГридКредит</li>
                <li>Закреплённое объявление в группе портала ВКонтакте</li>
                <li>Индивидуальный — реклама в разных частях сайта</li>
              </ul>
              <br>
              <p>Каждый вид платного объявления имеет свои сходства и различия, но во всех случаях они несут в себе колоссальный результат. Посмотрим ближе на каждый из них.</p>
              <h4>Премиум-объявление:</h4>
                <div class="premium-section" style="margin-top: 10px; margin-bottom: 10px;">
                  <div class="premium-section-header">
                    <div class="premium-section-title"><a href="#">Помощь в получении кредита в Москве и СПб!</a></div>
                  </div>
                  <p class="premium-section-txt" style="margin-bottom: 0px;">Поможем получить кредит в Москве и СПб, предоплат и комиссий не берём, все расчёты после получения. Приходите к нам в офис, у нас уютно и тепло!</p>
                  <div class="premium-section-footer">
                    <div class="premium-section-info">
                      <span class="premium-section-views"><i class="unhide icon"></i>113</span>
                      <span class="premium-section-category"><i class="unordered list icon"></i><a href="#">Помощь в получении кредита</a></span>
                      <span class="premium-section-date"><i class="calendar icon"></i>26 Июля 2017</span>
                    </div>
                    <a href="#" class="premium-section-button">Подробнее</a>
                  </div>
                </div>
              <strong>Преимущества премиум-объявления:</strong>
              <ul>
                <li>Очень сильно выделяется на фоне обычных объявлений</li>
                <li>Всегда располагается выше всех объявлений, независимо от категории</li>
                <li>Размещается в отдельном блоке</li>
                <li>Имеет свободную форму, по запросу добавим контактную информацию в текст объявления</li>
                <li>Нет баннерной рекламы</li>
              </ul>
              <br>
              <strong>Сроки размещения и цены</strong>
              <ul>
                <li>7 дней (неделя) - <strong>600 рублей</strong></li>
                <li>14 дней (2 недели) - <strong>1.000 рублей</strong></li>
                <li>30 дней (месяц) - <strong>2.000 рублей</strong></li>
              </ul>
              <br>
              <h4>Закреплённое объявление ВКонтакте:</h4>
              <div id="vk_post_-127555990_127" style="margin-top: 10px; margin-bottom: 10px;"></div>
              <script type="text/javascript">
                (function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//vk.com/js/api/openapi.js?146"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'vk_openapi_js'));
                (function() {
                  if (!window.VK || !VK.Widgets || !VK.Widgets.Post || !VK.Widgets.Post('vk_post_-127555990_127', -127555990, 127, '3fXJ6GyykCqhzUwloD10Ec-FpXc')) setTimeout(arguments.callee, 50);
                }());
              </script>
              <strong>Преимущества этого вида объявления:</strong>
              <ul>
                <li>Больше просмотров объявления (многим удобнее искать объявления ВКонтакте)</li>
                <li>Размещается всегда в верхней части страницы</li>
                <li>Имеет свободную форму, по запросу добавим контактную информацию в текст объявления</li>
                <li>Других закреплённых объявлений не будет</li>
              </ul>
              <br>
              <strong>Сроки размещения и цены</strong>
              <ul>
                <li>7 дней (неделя) - <strong>1.500 рублей</strong></li>
                <li>14 дней (2 недели) - <strong>2.500 рублей</strong></li>
                <li>30 дней (месяц) - <strong>5.000 рублей</strong></li>
              </ul>
            </div>
            -->
          </div>
        </div>
      </div>
    </div>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/tmp/footer.php'; ?>
    <script src="/core/tmp/assets/js/jquery.js" type="text/javascript"></script>
    <script src="/core/tmp/assets/js/jquery.maskedinput.js" type="text/javascript"></script>
  </body>

</html>