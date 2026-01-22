<?php
// uslugi-i-ceny.php
$page = 'uslugi';
$pageTitle = 'Услуги и цены — MEDEA';
require __DIR__ . '/partials/header.php';
?>

<section class="services-page">
  <div class="container">
    <div class="services-header">
      <a href="index.php" class="back-button" aria-label="Назад">
        <img src="icons/button.svg" alt="Назад">
      </a>
      <h1 class="services-title">УСЛУГИ&shy; И&nbsp;ЦЕНЫ</h1>
    </div>

    <ul class="services-grid">
      <li><a class="service-chip" href="#consult">КОНСУЛЬТАТИВНЫЙ<br>ПРИЁМ</a></li>
      <li><a class="service-chip" href="injekcionnaya-kosmetologiya.php">ИНЪЕКЦИОННАЯ<br>КОСМЕТОЛОГИЯ</a></li>
      <li><a class="service-chip" href="#apparat">АППАРАТНАЯ<br>КОСМЕТОЛОГИЯ</a></li>
      <li><a class="service-chip" href="#esthetic">ЭСТЕТИЧЕСКАЯ<br>КОСМЕТОЛОГИЯ</a></li>
      <li><a class="service-chip" href="#massage">МАССАЖ<br>И ОБЁРТЫВАНИЕ</a></li>
      <li><a class="service-chip" href="#nail">НОГТЕВОЙ<br>СЕРВИС</a></li>
      <li><a class="service-chip" href="#remove">УДАЛЕНИЕ<br>НОВООБРАЗОВАНИЙ</a></li>
      <li><a class="service-chip" href="#epil">ЭПИЛЯЦИЯ<br>И ДЕПИЛЯЦИЯ</a></li>
      <li><a class="service-chip" href="#sport">СПОРТИВНЫЙ<br>КЛУБ</a></li>
    </ul>
  </div>
</section>

<section id="consult" class="consultation-form">
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
          <label for="agreement">Я ДАЮ СОГЛАСИЕ НА&nbsp;ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ В&nbsp;СООТВЕТСТВИИ С&nbsp;ПОЛИТИКОЙ КОНФИДЕНЦИАЛЬНОСТИ&nbsp;САЙТА</label>
        </div>
        <button type="submit" class="form-submit">ЗАДАТЬ ВОПРОС</button>
      </div>
    </form>
  </div>
</section>

<!-- модалка консультация -->
<div id="consultation-modal" class="modal hidden">
  <div class="modal-overlay"></div>
  <form class="consultation-modal-content">
    <button class="modal-close" data-consultation-close>
      <img src="icons/close.svg" alt="Закрыть" class="close-icon">
    </button>
    <h2><span class="gradient-text">БЕСПЛАТНАЯ</span><br>КОНСУЛЬТАЦИЯ<br>ПО ПОДБОРУ УСЛУГ</h2>
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
