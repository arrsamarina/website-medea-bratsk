<?php
// rezultaty-procedur.php
$page = 'results';
$pageTitle = 'До/после — MEDEA';
require __DIR__ . '/partials/header.php';
?>

<section class="services-page">
  <div class="container">
    <div class="services-header">
      <a href="index.php" class="back-button" aria-label="Назад">
        <img src="icons/button.svg" alt="Назад">
      </a>
      <h1 class="services-title">РЕЗУЛЬТАТЫ ПРОЦЕДУР</h1>
    </div>

    <div class="results-content">
      <div class="results-grid">
        <div class="result-item">
          <div class="result-images">
            <div class="result-image">
              <img src="images/woman_before.png" alt="До процедуры" class="result-photo">
              <div class="result-label">ДО</div>
            </div>
            <div class="result-image">
              <img src="images/woman_after.png" alt="После процедуры" class="result-photo">
              <div class="result-label">ПОСЛЕ</div>
            </div>
          </div>
          <div class="result-info">
            <h3 class="result-title">Контурная пластика губ</h3>
            <p class="result-description">Результат через 2 недели после процедуры. Объем увеличен на&nbsp;1.5 мл, форма скорректирована, контур четко очерчен.</p>
            <div class="result-details">
              <span class="result-detail">Гиалуроновая кислота</span>
              <span class="result-detail">1.5 мл</span>
              <span class="result-detail">2 недели</span>
            </div>
          </div>
        </div>

        <div class="result-item">
          <div class="result-images">
            <div class="result-image">
              <img src="images/woman_before.png" alt="До процедуры" class="result-photo">
              <div class="result-label">ДО</div>
            </div>
            <div class="result-image">
              <img src="images/woman_after.png" alt="После процедуры" class="result-photo">
              <div class="result-label">ПОСЛЕ</div>
            </div>
          </div>
          <div class="result-info">
            <h3 class="result-title">Биоревитализация лица</h3>
            <p class="result-description">Результат через 3 недели после процедуры. Кожа стала более увлажненной, упругой и&nbsp;сияющей. Морщины заметно разгладились.</p>
            <div class="result-details">
              <span class="result-detail">Гиалуроновая кислота</span>
              <span class="result-detail">2.0 мл</span>
              <span class="result-detail">3 недели</span>
            </div>
          </div>
        </div>

        <div class="result-item">
          <div class="result-images">
            <div class="result-image">
              <img src="images/woman_before.png" alt="До процедуры" class="result-photo">
              <div class="result-label">ДО</div>
            </div>
            <div class="result-image">
              <img src="images/woman_after.png" alt="После процедуры" class="result-photo">
              <div class="result-label">ПОСЛЕ</div>
            </div>
          </div>
          <div class="result-info">
            <h3 class="result-title">Мезотерапия век</h3>
            <p class="result-description">Результат через 4 недели после процедуры. Убраны тёмные круги под&nbsp;глазами, кожа век стала более плотной и&nbsp;эластичной.</p>
            <div class="result-details">
              <span class="result-detail">Мезококтейль</span>
              <span class="result-detail">1.0 мл</span>
              <span class="result-detail">4 недели</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

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
