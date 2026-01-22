<?php
// o-specialiste.php
$page = 'staff';
$pageTitle = 'О специалисте — MEDEA';
require __DIR__ . '/partials/header.php';
?>

<section class="specialist-page">
  <div class="container">
    <div class="specialist-page-header">
      <a href="nashi-specialisty.php" class="back-button" aria-label="Назад">
        <img src="icons/button.svg" alt="Назад">
      </a>
      <h1 class="services-title">ПРОФИЛЬ</h1>
    </div>

    <div class="specialist-content">
      <div class="specialist-info-section">
        <div class="specialist-name">
          <h2 class="specialist-fullname">ШЕВЧЕНКО АЛЛА</h2>
        </div>

        <div class="specialist-divider"></div>

        <div class="specialist-details">
          <div class="details-row">
            <div class="detail-item">
              <h3 class="detail-title">ДОЛЖНОСТЬ</h3>
              <p class="detail-content">косметолог, дерматовенеролог</p>
            </div>

            <div class="detail-item">
              <h3 class="detail-title">СТАЖ РАБОТЫ</h3>
              <p class="detail-content">более 25 лет</p>
            </div>
          </div>

          <div class="detail-item specialization-item-full">
            <h3 class="detail-title">СПЕЦИАЛИЗАЦИЯ</h3>
            <div class="specialization-list">
              <div class="specialization-item"><span class="specialization-text">косметолог</span></div>
              <div class="specialization-item"><span class="specialization-text">дерматовенеролог</span></div>
              <div class="specialization-item"><span class="specialization-text">эстетическая и anti-age медицина</span></div>
              <div class="specialization-item"><span class="specialization-text">мезотерапия</span></div>
              <div class="specialization-item"><span class="specialization-text">биоревитализация</span></div>
              <div class="specialization-item"><span class="specialization-text">контурная пластика</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="specialist-photo-section">
        <img src="images/spec.png" alt="Шевченко Алла" class="specialist-main-photo">
      </div>
    </div>
  </div>
</section>

<section class="consultation-form">
  <div class="container">
    <form class="consultation-form-content">
      <h2><span class="gradient-text">БЕСПЛАТНАЯ</span><br>КОНСУЛЬТАЦИЯ<br>ПО ПОДБОРУ УСЛУГ</h2>
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
        <label for="modal-agreement">Я ДАЮ СОГЛАСИЕ НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ<br>В СООТВЕТСТВИИ С ПОЛИТИКОЙ КОНФИДЕНЦИАЛЬНОСТИ</label>
      </div>
      <button type="submit" class="form-submit">ЗАДАТЬ ВОПРОС</button>
    </div>
  </form>
</div>

<?php require __DIR__ . '/partials/footer.php'; ?>
