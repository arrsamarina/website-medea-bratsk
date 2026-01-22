<?php
// akcii.php
$page = 'promo';                       // подсветка пункта "Акции"
$pageTitle = 'Акции — MEDEA';
require __DIR__ . '/partials/header.php';
?>

<!-- НАЧАЛО КОНТЕНТА СТРАНИЦЫ -->

<section class="services-page">
  <div class="container">
    <header class="services-header page-header">
      <a href="index.php" class="back-button" aria-label="Назад">
        <img src="icons/button.svg" alt="Назад">
      </a>
      <h1 class="services-title">АКЦИИ</h1>
    </header>

    <div class="promo-banner">
      <div class="promo-content">
        <h2 class="promo-title">ПОЛУЧИТЕ СКИДКУ 10% НА&nbsp;ПЕРВОЕ ПОСЕЩЕНИЕ</h2>
        <p class="promo-subtitle">СПЕЦИАЛЬНЫЕ ПРЕДЛОЖЕНИЯ И ДРУГИЕ ПРИВИЛЕГИИ ПРИ&nbsp;ПОДПИСКЕ НА&nbsp;E-MAIL РАССЫЛКУ</p>

        <form class="promo-form" id="promoForm" action="submit_promo.php" method="post" novalidate>
          <div class="promo-form-fields">
            <div class="promo-form-field">
              <label for="promo-email">E-MAIL*</label>
              <input type="email" id="promo-email" name="email" required>
              <div class="error-message">Введите корректный email адрес</div>
            </div>
          </div>

          <div class="promo-form-footer">
            <div class="promo-agreement">
              <input type="checkbox" id="promo-agreement" name="agreement" required>
              <label for="promo-agreement">Я ДАЮ СОГЛАСИЕ НА&nbsp;ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ<br>В&nbsp;СООТВЕТСТВИИ С&nbsp;ПОЛИТИКОЙ КОНФИДЕНЦИАЛЬНОСТИ САЙТА</label>
            </div>
            <button type="submit" class="promo-submit">ОТПРАВИТЬ</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- МОДАЛКА КОНСУЛЬТАЦИИ -->
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
        <label for="modal-agreement">Я ДАЮ СОГЛАСИЕ НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ<br>В СООТВЕТСТВИИ С ПОЛИТИКОЙ КОНФИДЕНЦИАЛЬНОСТИ</label>
      </div>
      <button type="submit" class="form-submit">ЗАДАТЬ ВОПРОС</button>
    </div>
  </form>
</div>

<!-- УСПЕХ-МОДАЛ -->
<div id="success-modal" class="success-modal">
  <div class="success-modal-content">
    <h3>Спасибо!</h3>
    <p>Мы с вами свяжемся в ближайшее время!</p>
    <button onclick="closeSuccessModal()">Закрыть</button>
  </div>
</div>

<!-- КОНЕЦ КОНТЕНТА СТРАНИЦЫ -->

<?php require __DIR__ . '/partials/footer.php'; ?>
