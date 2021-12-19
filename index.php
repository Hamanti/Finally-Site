<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Миролюбец Главная</title>
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- Подключение шапки -->
    <?php include 'content/header.php'; ?>

    <section class="display">
      <div class="display-block">
        <div class="display-block__text">
          <p class="display-block__minititle up-text">Центр психологической поддержки</p>
          <!-- /.display-block__minititle -->
          <p class="display-block__title up-text">Миролюбец</p>
          <!-- /.display-block__title -->
          <p class="display-block__subtitle up-text">Центр работает в Абакане. Работаем по скайпу по миру, он-лайн консультации. По медиации-Сибирь.
          </p>
          <!-- /.display-block__subtitle -->
          <button class="display-block__button up-text">связаться с нами</button>
          <!-- /.button display-block__button -->
        </div>
        <!-- /.display-block__text -->
      </div>
      <!-- /.display-block -->
    </section>
    <!-- /.display -->

    <section class="description">
      <div class="container">
        <div class="description-block">
          <h2 class="section__title descriprion-block__title">Почему мы?</h2>
          <div class="description-block__cards">
            <div class="description-card">
              <div class="description-card__img"><img src="img/main/description/lamp.png" alt=""></div>
              <h4 class="description-card__title">Инновационный<br>подход</h4>
              <p class="description-card__subtitle">С другой стороны консультация с широким активом в значительной степени обуславливает создание направлений прогрессивного развития. Значимость этих проблем настолько очевидна, что</p>
              <a href="" class="description-card__link up-text">подробней</a>
            </div>
            <!-- /.description-card -->
            <div class="description-card">
              <div class="description-card__img"><img src="img/main/description/defense.png" alt=""></div>
              <h4 class="description-card__title">Более 10 лет<br>опыта работы</h4>
              <p class="description-card__subtitle">С другой стороны консультация с широким активом в значительной степени обуславливает создание направлений прогрессивного развития. Значимость этих проблем настолько очевидна, что</p>
              <a href="" class="description-card__link up-text">подробней</a>
            </div>
            <!-- /.description-card -->
            <div class="description-card">
              <div class="description-card__img"><img src="img/main/description/list.png" alt=""></div>
              <h4 class="description-card__title">Разнообразие<br>услуг в одном месте</h4>
              <p class="description-card__subtitle">С другой стороны консультация с широким активом в значительной степени обуславливает создание направлений прогрессивного развития. Значимость этих проблем настолько очевидна, что</p>
              <a href="" class="section__link description-card__link up-text">подробней</a>
            </div>
            <!-- /.description-card -->
          </div>
        </div>
        <!-- /.description-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section description -->

    <!-- Подключение блока "Каталог" -->
    <?php include 'content/products.php'?>

    <section class="info">
      <div class="container">
        <div class="info-block">
          <div class="info-block__cards">
            <div class="info-block__card">
              <div class="info-block__image"><img src="img/main/info/card1.png" alt=""></div>
              <h1 class="info-block__memory">+900</h1>
              <span class="info-block__subtitle">Клиентов</span>
            </div>
            <!-- /.info-block__card -->
            <div class="info-block__card">
              <div class="info-block__image"><img src="img/main/info/card2.png" alt=""></div>
              <h1 class="info-block__memory">30</h1>
              <span class="info-block__subtitle">Программ</span>
            </div>
            <!-- /.info-block__card -->
            <div class="info-block__card">
              <div class="info-block__image"><img src="img/main/info/card3.png" alt=""></div>
              <h1 class="info-block__memory">30</h1>
              <span class="info-block__subtitle">Сертификатов</span>
            </div>
            <!-- /.info-block__card -->
            <div class="info-block__card">
              <div class="info-block__image"><img src="img/main/info/card4.png" alt=""></div>
              <h1 class="info-block__memory">9</h1>
              <span class="info-block__subtitle">Специалистов</span>
            </div>
            <!-- /.info-block__card -->
          </div>
          <!-- /.info-block__cards -->
        </div>
        <!-- /.info-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.info -->
    
    <!-- Подключение подвала -->
    <? include 'content/footer.php'; ?>
