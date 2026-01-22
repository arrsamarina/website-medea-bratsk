<?php
// o-klinike.php
$page = 'about';
$pageTitle = 'О клинике — MEDEA';
require __DIR__ . '/partials/header.php';
?>

<section class="services-page">
  <div class="container">
    <header class="services-header page-header">
      <a href="index.php" class="back-button" aria-label="Назад">
        <img src="icons/button.svg" alt="Назад">
      </a>
      <h1 class="services-title">О&nbsp;КЛИНИКЕ</h1>
    </header>

    <section class="about-grid">
      <!-- верхний ряд -->
      <div class="about-top-row">
        <img class="about-photo about-photo-top-left" src="images/medea_inside_1.png" alt="Интерьер клиники MEDEA">
        <div class="about-text-top-right">
          <p>MEDEA — единственный центр врачебной косметологии с&nbsp;медицинской лицензией в&nbsp;двух районах города Братска.</p>
          <p>Мы заботимся о&nbsp;вашей красоте и&nbsp;здоровье с&nbsp;помощью разрешённых к&nbsp;использованию препаратов и&nbsp;медицинского оборудования с&nbsp;регистрационными удостоверениями, опытом и&nbsp;знаниями наших специалистов.</p>
          <p>Мы предлагаем индивидуальный подход к&nbsp;каждому клиенту, разрабатывая персональные программы ухода и&nbsp;восстановления кожи. Наши специалисты используют только проверенные методики, соответствующие современным стандартам безопасности и&nbsp;эффективности.</p>
        </div>
      </div>

      <!-- нижний ряд -->
      <div class="about-bottom-row">
        <div class="about-text-bottom-left">
          <h2 class="about-subtitle">МИССИЯ КЛИНИКИ MEDEA</h2>
          <p>Анализы помогут выявить дефициты микро- и&nbsp;макроэлементов, витаминов, которые могут быть причиной многих эстетических проблем, а&nbsp;также тормозить обмен веществ, задерживать жидкость в&nbsp;организме, способствовать лишнему весу. Генетическое обследование проводится раз в&nbsp;жизни и&nbsp;показывает с&nbsp;каким наследственным потенциалом родился человек. И&nbsp;даже если выявлены высокие риски возникновения какого-либо заболевания, его можно избежать, поместив ген в&nbsp;неудобное для&nbsp;него условие через изменение образа жизни. Также генетические исследования показывают возможность организма к&nbsp;усвоению витаминов, микро- и макроэлементов, склонность организма к&nbsp;тем или иным физическим нагрузкам.</p>
        </div>
        <img class="about-photo about-photo-bottom-right" src="images/medea_inside_2.png" alt="Интерьер клиники MEDEA">
      </div>
    </section>
  </div>
</section>

<!-- форма консультации -->
<section class="consultation-form">
  <div class="container">
    <form class="consultation-form-content">
      <h2><span class="gradient-text">БЕСПЛАТНАЯ</span><br>КОНСУЛЬТАЦИЯ<br>ПО&nbsp;ПОДБОРУ ПРОЦЕДУР</h2>
      <div class="form-fields">
        <div class="form-field">
          <label for="name">ВАШЕ ИМЯ*</label>
          <input type="text" id="name" name="name" required>
          <div class="error-message">Имя должно содержать только буквы (минимум 2 символа)</div>
        </div>
        <div class="form-field">
          <label for="phone">ТЕЛЕФОН*</label>
          <input type="tel" id="phone" name="phone" required>
          <div class="error-message">Введите корректный номер телефона (11 цифр, начинающийся с 7 или 8)</div>
        </div>
        <div class="form-field">
          <label for="email">E-MAIL</label>
          <input type="email" id="email" name="email">
          <div class="error-message">Введите корректный email адрес</div>
        </div>
      </div>
      <div class="form-footer">
        <div class="form-agreement">
          <input type="checkbox" id="agreement" name="agreement" required>
          <label for="agreement">Я ДАЮ СОГЛАСИЕ НА&nbsp;ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ В&nbsp;СООТВЕТСТВИИ С&nbsp;ПОЛИТИКОЙ КОНФИДЕНЦИАЛЬНОСТИ САЙТА</label>
        </div>
        <button type="submit" class="form-submit">ЗАДАТЬ ВОПРОС</button>
      </div>
    </form>
  </div>
</section>

<!-- фотоальбом -->
<section class="photo-gallery">
  <div class="container">
    <div class="gallery-header">
      <h2>ФОТОАЛЬБОМ</h2>
      <div class="gallery-controls">
        <button class="gallery-prev" aria-label="Предыдущее фото">
          <img src="icons/button.svg" alt="Назад">
        </button>
        <button class="gallery-next" aria-label="Следующее фото">
          <img src="icons/button.svg" alt="Вперед">
        </button>
      </div>
    </div>
    <div class="gallery-container">
      <div class="gallery-slider">
        <div class="gallery-slide active">
          <img src="images/photo1.png" alt="Интерьер клиники MEDEA">
        </div>
        <div class="gallery-slide">
          <img src="images/photo2.png" alt="Интерьер клиники MEDEA">
        </div>
        <div class="gallery-slide">
          <img src="images/photo3.png" alt="Интерьер клиники MEDEA">
        </div>
      </div>
      <div class="gallery-dots">
        <span class="dot active" data-slide="0"></span>
        <span class="dot" data-slide="1"></span>
        <span class="dot" data-slide="2"></span>
      </div>
    </div>
  </div>
</section>

<!-- медицинская лицензия -->
<section class="license">
  <div class="container">
    <h2>МЕДИЦИНСКАЯ ЛИЦЕНЗИЯ</h2>
    <div class="license-grid">
      <img src="images/licence1.png" alt="Лицензия 1" class="license-image" data-license="0">
      <img src="images/licence2.png" alt="Лицензия 2" class="license-image" data-license="1">
      <img src="images/licence3.png" alt="Лицензия 3" class="license-image" data-license="2">
    </div>
    <!-- мобильный слайдер лицензий -->
    <div class="license-mobile-slider">
      <div class="license-slider-container">
        <div class="license-slider-track">
          <div class="license-slide">
            <img src="images/licence1.png" alt="Лицензия клиники MEDEA - документ 1" class="license-slide-image">
          </div>
          <div class="license-slide">
            <img src="images/licence2.png" alt="Лицензия клиники MEDEA - документ 2" class="license-slide-image">
          </div>
          <div class="license-slide">
            <img src="images/licence3.png" alt="Лицензия клиники MEDEA - документ 3" class="license-slide-image">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- модалка консультации -->
<div id="consultation-modal" class="modal hidden">
  <div class="modal-overlay"></div>
  <form class="consultation-modal-content">
    <button class="modal-close" data-consultation-close>
      <img src="icons/close.svg" alt="Закрыть" class="close-icon">
    </button>
    <h2><span class="gradient-text">БЕСПЛАТНАЯ</span><br>КОНСУЛЬТАЦИЯ<br>ПО&nbsp;ПОДБОРУ УСЛУГ</h2>
    <div class="form-fields">
      <div class="form-field">
        <label for="modal-name">ВАШЕ ИМЯ*</label>
        <input type="text" id="modal-name" name="name" required>
        <div class="error-message">Имя должно содержать только буквы (минимум 2 символа)</div>
      </div>
      <div class="form-field">
        <label for="modal-phone">ТЕЛЕФОН*</label>
        <input type="tel" id="modal-phone" name="phone" required>
        <div class="error-message">Введите корректный номер телефона (11 цифр, начинающийся с 7 или 8)</div>
      </div>
      <div class="form-field">
        <label for="modal-email">E-MAIL</label>
        <input type="email" id="modal-email" name="email">
        <div class="error-message">Введите корректный email адрес</div>
      </div>
    </div>
    <div class="form-footer">
      <div class="form-agreement">
        <input type="checkbox" id="modal-agreement" name="agreement" required>
        <label for="modal-agreement">Я ДАЮ СОГЛАСИЕ НА&nbsp;ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ<br>В&nbsp;СООТВЕТСТВИИ С&nbsp;ПОЛИТИКОЙ КОНФИДЕНЦИАЛЬНОСТИ</label>
      </div>
      <button type="submit" class="form-submit">ЗАДАТЬ ВОПРОС</button>
    </div>
  </form>
</div>

<?php require __DIR__ . '/partials/footer.php'; ?>
