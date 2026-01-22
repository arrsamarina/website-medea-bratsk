<?php
// nashi-specialisty.php
$page = 'staff';                              // подсветка пункта "Специалисты"
$pageTitle = 'Специалисты — MEDEA';
require __DIR__ . '/partials/header.php';
?>

<section class="services-page">
  <div class="container">
    <header class="services-header page-header">
      <a href="index.php" class="back-button" aria-label="Назад">
        <img src="icons/button.svg" alt="Назад">
      </a>
      <h1 class="services-title">НАШИ СПЕЦИАЛИСТЫ</h1>
    </header>

    <div class="specialists-grid">
      <div class="specialist-card-detailed">
        <div class="specialist-photo-container">
          <img src="images/spec.png" alt="Шевченко Алла Петровна" class="specialist-photo-detailed">
        </div>
        <div class="specialist-info">
          <h3 class="specialist-name-detailed">ШЕВЧЕНКО АЛЛА</h3>
          <p class="specialist-title-detailed">ГЛАВНЫЙ ВРАЧ</p>
          <p class="specialist-title-detailed">ВРАЧ ДЕРМАТОЛОГ, ТРИХОЛОГ</p>
          <p class="specialist-experience">СТАЖ РАБОТЫ: 25&nbsp;ЛЕТ</p>
          <a href="o-specialiste.php" class="specialist-link">НА СТРАНИЦУ СПЕЦИАЛИСТА</a>
        </div>
      </div>

      <div class="specialist-card-detailed">
        <div class="specialist-photo-container">
          <img src="images/spec.png" alt="Бутенко Валерия" class="specialist-photo-detailed">
        </div>
        <div class="specialist-info">
          <h3 class="specialist-name-detailed">БУТЕНКО ВАЛЕРИЯ</h3>
          <p class="specialist-title-detailed">МЕДИЦИНСКАЯ СЕСТРА В&nbsp;КОСМЕТОЛОГИИ</p>
          <p class="specialist-experience">СТАЖ РАБОТЫ: 5&nbsp;ЛЕТ</p>
          <a href="o-specialiste.php" class="specialist-link">НА СТРАНИЦУ СПЕЦИАЛИСТА</a>
        </div>
      </div>

      <div class="specialist-card-detailed">
        <div class="specialist-photo-container">
          <img src="images/spec.png" alt="Образцова Анастасия" class="specialist-photo-detailed">
        </div>
        <div class="specialist-info">
          <h3 class="specialist-name-detailed">ОБРАЗЦОВА АНАСТАСИЯ</h3>
          <p class="specialist-title-detailed">ВРАЧ ПОДОЛОГ,<br>МАСТЕР МАНИКЮРА И ПЕДИКЮРА</p>
          <p class="specialist-experience">СТАЖ РАБОТЫ: 6&nbsp;ЛЕТ</p>
          <a href="o-specialiste.php" class="specialist-link">НА СТРАНИЦУ СПЕЦИАЛИСТА</a>
        </div>
      </div>

      <div class="specialist-card-detailed">
        <div class="specialist-photo-container">
          <img src="images/spec.png" alt="Петрова Елена" class="specialist-photo-detailed">
        </div>
        <div class="specialist-info">
          <h3 class="specialist-name-detailed">ПЕТРОВА ЕЛЕНА</h3>
          <p class="specialist-title-detailed">МЕДИЦИНСКАЯ СЕСТРА В&nbsp;КОСМЕТОЛОГИИ</p>
          <p class="specialist-experience">СТАЖ РАБОТЫ: 8&nbsp;ЛЕТ</p>
          <a href="o-specialiste.php" class="specialist-link">НА СТРАНИЦУ СПЕЦИАЛИСТА</a>
        </div>
      </div>

      <div class="specialist-card-detailed">
        <div class="specialist-photo-container">
          <img src="images/spec.png" alt="Козлова Мария" class="specialist-photo-detailed">
        </div>
        <div class="specialist-info">
          <h3 class="specialist-name-detailed">КОЗЛОВА МАРИЯ</h3>
          <p class="specialist-title-detailed">КОСМЕТОЛОГ,<br>ЭСТЕТИСТ</p>
          <p class="specialist-experience">СТАЖ РАБОТЫ: 4&nbsp;ГОДА</p>
          <a href="o-specialiste.php" class="specialist-link">НА СТРАНИЦУ СПЕЦИАЛИСТА</a>
        </div>
      </div>

      <div class="specialist-card-detailed">
        <div class="specialist-photo-container">
          <img src="images/spec.png" alt="Смирнова Анна" class="specialist-photo-detailed">
        </div>
        <div class="specialist-info">
          <h3 class="specialist-name-detailed">СМИРНОВА АННА</h3>
          <p class="specialist-title-detailed">ДЕРМАТОЛОГ,<br>КОСМЕТОЛОГ</p>
          <p class="specialist-experience">СТАЖ РАБОТЫ: 7&nbsp;ЛЕТ</p>
          <a href="o-specialiste.php" class="specialist-link">НА СТРАНИЦУ СПЕЦИАЛИСТА</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="consultation-form">
  <div class="container">
    <form class="consultation-form-content">
      <h2><span class="gradient-text">БЕСПЛАТНАЯ</span><br>КОНСУЛЬТАЦИЯ<br>ПО ПОДБОРУ ПРОЦЕДУР</h2>
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
          <label for="agreement">Я ДАЮ СОГЛАСИЕ НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ В СООТВЕТСТВИИ С ПОЛИТИКОЙ КОНФИДЕНЦИАЛЬНОСТИ САЙТА</label>
        </div>
        <button type="submit" class="form-submit">ЗАДАТЬ ВОПРОС</button>
      </div>
    </form>
  </div>
</section>

<!-- МОДАЛКИ СТРАНИЦЫ -->
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

<div id="success-modal" class="success-modal">
  <div class="success-modal-content">
    <h3>Спасибо!</h3>
    <p>Мы с вами свяжемся в ближайшее время!</p>
    <button onclick="closeSuccessModal()">Закрыть</button>
  </div>
</div>

<?php require __DIR__ . '/partials/footer.php'; ?>
