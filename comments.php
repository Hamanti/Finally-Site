<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Миролюбец Отзывы</title>
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body>
  
  <!-- Подключение шапки -->
  <? include 'content/header.php' ?>

  <section class="comments">
    <div class="container">
      <div class="comments-block">
        <h1 class="comments-block__title">Отзывы наших клиентов</h1>
        <div class="comments-block__line"></div>
        <div class="comments-flex">
          <? include 'content/comment.php'?>
          <? include 'content/comment.php'?>
          <? include 'content/comment.php'?>

          <!-- /.comment -->
        </div>
        <!-- /.comments-flex -->
      </div>
      <!-- /.comments-block -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.comments -->

  <!-- Подключение подвала -->
  <? include 'content/footer.php' ?>