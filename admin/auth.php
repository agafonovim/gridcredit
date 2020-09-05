<?php
  include_once $_SERVER['DOCUMENT_ROOT'] . '/core/config.php';
  $login = $_POST['login'];
  $password = md5($_POST['password'] . 'gcadmin');

  try {
    $sqlauth = 'SELECT COUNT(*) FROM administrators WHERE login = :login AND password = :password';
    $auth = $pdo->prepare($sqlauth);
    $auth->bindValue(':login', $login);
    $auth->bindValue(':password', $password);
    $auth->execute();
    $enter = $auth->fetch();

    if ($enter[0] > 0){
      ini_set('session.gc_maxlifetime', 120960);
      ini_set('session.cookie_lifetime', 120960);

      session_start();
      $_SESSION['login'] = $login;
      $_SESSION['password'] = $password;
      header('Location: /admin');
      exit();
    }
  } catch (Exception $e) {}
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

    <title>Вход в панель администратора</title>

    <link href="/admin/assets/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/assets/auth.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <form class="form-signin" action="" method="POST">
        <h2 class="form-signin-heading">Вход в панель администратора</h2>
        <label for="login" class="sr-only">Логин</label>
        <input name="login" id="login" class="form-control" placeholder="Логин" required="" autofocus="" type="text">
        <label for="password" class="sr-only">Пароль</label>
        <input id="password" name="password" class="form-control" placeholder="Пароль" required="" type="password">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
      </form>
    </div>
  </body>
</html>