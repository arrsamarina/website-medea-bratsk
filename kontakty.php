<?php
// kontakty.php
$page = 'contacts';                 // подсветка пункта "Контакты"
$pageTitle = 'Контакты — MEDEA';
require __DIR__ . '/partials/header.php';
?>

<!-- НАЧАЛО КОНТЕНТА СТРАНИЦЫ -->

<section class="services-page">
  <div class="container">
    <header class="services-header page-header">
      <a href="index.php" class="back-button" aria-label="Назад">
        <img src="icons/button.svg" alt="Назад">
      </a>
      <h1 class="services-title">КОНТАКТЫ</h1>
    </header>

    <div class="contacts">
      <div class="contacts-grid">
        <a href="https://maps.google.com/maps?hl=ru&gl=pl&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x5ce34d1873088e3f:0xd92c56dc88d5bb94"
           target="_blank" class="contact-card contact-card-link">
          <h3 class="contact-location">ЦЕНТРАЛЬНЫЙ</h3>
          <div class="contact-info">
            <p>Г.&nbsp;БРАТСК, ЦЕНТРАЛЬНЫЙ&nbsp;РАЙОН,<br>УЛ.&nbsp;ДЕПУТАТСКАЯ,&nbsp;ДОМ&nbsp;2</p>
            <p>29-22-200-1</p>
            <p>РАБОТАЕМ С&nbsp;10:00&nbsp;ДО&nbsp;20:00, ЕЖЕДНЕВНО, БЕЗ&nbsp;ВЫХОДНЫХ</p>
            <p class="map-link"><img src="icons/map.svg" alt="Карта" class="map-icon"> Открыть в&nbsp;картах</p>
          </div>
        </a>

        <a href="https://maps.google.com/maps?hl=ru&gl=pl&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x5ce354491ed948a7:0x68c8513a75ad87ea"
           target="_blank" class="contact-card contact-card-link">
          <h3 class="contact-location">ЭНЕРГЕТИК</h3>
          <div class="contact-info">
            <p>Г.&nbsp;БРАТСК, РАЙОН&nbsp;ЭНЕРГЕТИК,<br>УЛ.&nbsp;СТРОИТЕЛЕЙ,&nbsp;ДОМ&nbsp;2</p>
            <p>29-22-200-1</p>
            <p>РАБОТАЕМ С&nbsp;10:00&nbsp;ДО&nbsp;20:00, ЕЖЕДНЕВНО, БЕЗ&nbsp;ВЫХОДНЫХ</p>
            <p class="map-link"><img src="icons/map.svg" alt="Карта" class="map-icon"> Открыть в картах</p>
          </div>
        </a>
      </div>
    </div>
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
          <label for="agreement">Я ДАЮ СОГЛАСИЕ НА&nbsp;ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ В&nbsp;СООТВЕТСТВИИ С&nbsp;ПОЛИТИКОЙ КОНФИДЕНЦИАЛЬНОСТИ САЙТА</label>
        </div>
        <button type="submit" class="form-submit">ЗАДАТЬ ВОПРОС</button>
      </div>
    </form>
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
        <label for="modal-agreement">Я ДАЮ СОГЛАСИЕ НА&nbsp;ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ<br>В&nbsp;СООТВЕТСТВИИ С&nbsp;ПОЛИТИКОЙ КОНФИДЕНЦИАЛЬНОСТИ</label>
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
