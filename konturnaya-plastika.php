<?php
// konturnaya-plastika.php
$page = 'uslugi';                           // подсветка "Услуги и цены"
$pageTitle = 'Контурная пластика — MEDEA';
require __DIR__ . '/partials/header.php';
?>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="styles.css">
    <style>
      .procedure-photo {
        width: 400px;
        height: 400px;
        border-radius: 50%;
        object-fit: cover;
        object-position: center;
      }
      
      /* стили для блока несовершенств - текст справа от номера */
      .imperfections-section .principles-title {
        text-align: left !important;
      }
      
      /* нормальные отступы между блоками */
      .about-procedure {
        margin-bottom: 0;
      }
      
      .consultation-form {
        margin: 0;
      }
      
      .imperfections-section {
        margin: 0;
      }
      
      .imperfections-section .principle-item {
        flex-direction: row;
        align-items: center;
        gap: 20px;
      }
      
      .imperfections-section .principle-number {
        width: 60px;
        height: 60px;
        background: rgba(248, 166, 163, 0.6);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: "Winston", serif;
        font-size: 24px;
        font-weight: 400;
        color: var(--text-dark);
        flex-shrink: 0;
      }
      
      .imperfections-section .principle-content {
        flex: 1;
      }
      
      .imperfections-section .principle-content p {
        font-family: "Winston", sans-serif;
        font-size: 18px;
        font-weight: 400;
        line-height: 1.4;
        color: var(--text-dark);
        margin: 0;
        text-align: left;
      }
      
      /* стили для блока зон проведения - используем те же стили что и about-procedure */
      .zones-section {
        padding: 80px 0;
        background: #fff;
      }
      
      .zones-grid {
        display: grid;
        grid-template-rows: 1fr;
        gap: 15px;
        align-items: start;
        margin-top: 0;
      }
      
      .zones-top-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: start;
      }
      
      .zones-text {
        order: 1;
      }
      
      .zones-image {
        order: 2;
      }
      
      .zones-photo {
        width: 400px;
        height: 400px;
        border-radius: 50%;
        object-fit: cover;
        object-position: center;
      }
      
      .zones-title {
        font-family: "Winston", serif;
        font-size: 56px;
        font-weight: 400;
        line-height: 1.1;
        color: var(--text-dark);
        margin: 0 0 30px 0;
        text-align: left;
      }
      
      /* унифицированные стили для всех заголовков - размер как у about-procedure-title */
      .about-procedure-title {
        font-size: 56px !important;
      }
      
      .principles-title {
        font-size: 56px !important;
      }
      
      .about-subtitle {
        font-size: 56px !important;
      }
      
      /* стили для блока "Как проходит процедура" - как у zones-section */
      .about-procedure {
        padding: 80px 0;
        background: #fff;
      }
      
      .about-grid {
        display: grid;
        grid-template-rows: 1fr;
        gap: 15px;
        align-items: start;
        margin-top: 0;
      }
      
      .about-top-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: start;
      }
      
      .about-text-top-right {
        order: 1;
      }
      
      .about-photo {
        order: 2;
      }
      
      .about-text-top-right p {
        font-family: "Winston", sans-serif;
        font-size: 18px;
        font-weight: 400;
        line-height: 1.6;
        color: var(--text-dark);
        margin: 0;
        text-align: left;
      }
      
      .zones-description {
        font-family: "Winston", sans-serif;
        font-size: 18px;
        font-weight: 400;
        line-height: 1.6;

        color: var(--text-dark);
        margin: 0;
        text-align: left;
      }
      
      @media (max-width: 768px) {
        .procedure-photo {
          width: 300px;
          height: 300px;
        }
        
        .about-grid { 
          grid-template-rows: auto auto;
          gap: 12px; 
          margin-top: 10px;
        }
        
        .about-top-row {
          grid-template-columns: 1fr;
          gap: 30px;
        }
        
        .about-photo { 
          margin-bottom: 0; 
          width: 300px;
          height: 300px;
          margin-left: auto;
          margin-right: auto;
        }
        
        .zones-grid { 
          grid-template-rows: auto auto;
          gap: 12px; 
          margin-top: 10px;
        }
        
        .zones-top-row {
          grid-template-columns: 1fr;
          gap: 30px;
        }
        
        .zones-photo { 
          margin-bottom: 0; 
          width: 300px;
          height: 300px;
          margin-left: auto;
          margin-right: auto;
        }
        
        .zones-title { 
          font-size: 48px; 
          margin-bottom: 15px; 
        }
        
        .about-procedure-title {
          font-size: 48px !important;
        }
        
        .principles-title {
          font-size: 48px !important;
        }
        
        .about-subtitle {
          font-size: 48px !important;
        }
        
        .about-text-top-right p {
          font-size: 18px;
        }
        
        .zones-description { 
          font-size: 18px; 
        }
        
        .zones-text { 
          margin-bottom: 35px; 
        }
        
        .about-photo {
          margin-left: auto;
          margin-right: auto;
        }
        
        .zones-photo {
          margin-left: auto;
          margin-right: auto;
        }
      }
      
      @media (max-width: 480px) {
        .about-grid { 
          margin-top: 5px; 
          gap: 10px; 
        }
        
        .about-top-row { 
          gap: 20px; 
        }
        
        .zones-grid { 
          margin-top: 5px; 
          gap: 10px; 
        }
        
        .zones-top-row { 
          gap: 20px; 
        }
        
        .zones-title { 
          font-size: 40px; 
          margin-bottom: 12px; 
        }
        
        .about-procedure-title {
          font-size: 40px !important;
        }
        
        .principles-title {
          font-size: 40px !important;
        }
        
        .about-subtitle {
          font-size: 40px !important;
        }
        
        .about-text-top-right p {
          font-size: 16px;
        }
        
        .zones-description { 
          font-size: 16px; 
        }
        
        .zones-text { 
          margin-bottom: 30px; 
        }
        
        .about-photo {
          margin-left: auto;
          margin-right: auto;
        }
        
        .zones-photo {
          margin-left: auto;
          margin-right: auto;
        }
      }
      
      @media (max-width: 360px) {
        .about-grid { 
          margin-top: 0px; 
          gap: 8px; 
        }
        
        .about-top-row { 
          gap: 15px; 
        }
        
        .zones-grid { 
          margin-top: 0px; 
          gap: 8px; 
        }
        
        .zones-top-row { 
          gap: 15px; 
        }
        
        .zones-title { 
          font-size: 32px; 
          margin-bottom: 10px; 
        }
        
        .about-procedure-title {
          font-size: 32px !important;
        }
        
        .principles-title {
          font-size: 32px !important;
        }
        
        .about-subtitle {
          font-size: 32px !important;
        }
        
        .about-text-top-right p {
          font-size: 15px;
        }
        
        .zones-description { 
          font-size: 15px; 
        }
        
        .zones-text { 
          margin-bottom: 25px; 
        }
        
        .about-photo {
          margin-left: auto;
          margin-right: auto;
        }
        
        .zones-photo {

          margin-left: auto;
          margin-right: auto;
        }
      }
      
      /* стили для блока с ценами */
      .pricing-section {
        padding: 80px 0;
        background: #fff;
      }
      
      .pricing-title {
        font-family: "Winston", serif;
        font-size: 56px;
        font-weight: 400;
        color: var(--text-dark);
        text-align: left;
        margin: 0 0 50px 0;
      }
      
      .pricing-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
      }
      
      .pricing-item {
        display: grid;
        grid-template-columns: 120px 1fr 200px 120px auto;
        align-items: center;
        gap: 20px;
        padding: 20px 0;
        border-bottom: 1px solid #e0e0e0;
      }
      
      .pricing-item:last-child {
        border-bottom: none;
      }
      
      .pricing-code {
        font-family: "Winston", sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: var(--text-dark);
      }
      
      .pricing-procedure {
        font-family: "Winston", sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: var(--text-dark);
      }
      
      .pricing-product {
        font-family: "Winston", sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: var(--text-dark);
      }
      
      .pricing-price {
        font-family: "Winston", sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: var(--text-dark);
        text-align: right;
      }
      
      .pricing-link {
        font-family: "Winston", sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: var(--text-dark);
        text-decoration: underline;
        text-decoration-thickness: 0.5px;
        text-underline-offset: 2px;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
      }
      
      .pricing-link:hover {
        background: linear-gradient(135deg, #F8A6A3 0%, #D4A574 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-decoration: none;
      }
      
      .pricing-link:hover::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 0.5px;
        background: linear-gradient(135deg, #F8A6A3 0%, #D4A574 100%);
      }
      
      @media (max-width: 768px) {
        .pricing-title {
          font-size: 48px;
          margin-bottom: 40px;
        }
        
        .pricing-item {
          grid-template-columns: 1fr;
          gap: 10px;
          text-align: left;
        }
        
        .pricing-code,
        .pricing-procedure,
        .pricing-product,
        .pricing-price,
        .pricing-link {
          font-size: 14px;
        }
      }
      
      @media (max-width: 480px) {
        .pricing-title {
          font-size: 40px;
          margin-bottom: 30px;
        }
        
        .pricing-item {
          padding: 15px 0;
        }
        
        .pricing-code,
        .pricing-procedure,
        .pricing-product,
        .pricing-price,
        .pricing-link {
          font-size: 13px;
        }
      }
      
      @media (max-width: 360px) {
        .pricing-title {
          font-size: 32px;
          margin-bottom: 25px;
        }
        
        .pricing-code,
        .pricing-procedure,
        .pricing-product,
        .pricing-price,
        .pricing-link {
          font-size: 12px;
        }
      }
    </style>
  <section class="services-page">
  <div class="container">
    <div class="services-header">
      <a href="injekcionnaya-kosmetologiya.php" class="back-button" aria-label="Назад">
        <img src="icons/button.svg" alt="Назад">
      </a>
      <h1 class="services-title">КОНТУРНАЯ ПЛАСТИКА</h1>
    </div>


    <div class="contour-services">
      <div class="contour-services-grid">
        <div class="contour-service-card"><h3 class="contour-service-category">СКУЛЫ</h3><p class="contour-service-title">ПОДЧЁРКНУТЫЕ СКУЛЫ</p></div>
        <div class="contour-service-card"><h3 class="contour-service-category">ГУБЫ</h3><p class="contour-service-title">КОРРЕКЦИЯ ГУБ</p></div>
        <div class="contour-service-card"><h3 class="contour-service-category">ФОРМЫ</h3><p class="contour-service-title">ИЗМЕНЕНИЕ ФОРМ</p></div>
        <div class="contour-service-card"><h3 class="contour-service-category">ТЕЛО</h3><p class="contour-service-title">КОРРЕКТИРОВКА ТЕЛА</p></div>
        <div class="contour-service-card"><h3 class="contour-service-category">КОЖА</h3><p class="contour-service-title">УСТРАНЕНИЕ ПОСТАКНЕ</p></div>
        <div class="contour-service-card"><h3 class="contour-service-category">СКЛАДКИ</h3><p class="contour-service-title">УМЕНЬШЕНИЕ НОСОГУБНЫХ СКЛАДОК</p></div>
      </div>
    </div>

    <div class="contour-booking">
      <button class="contour-booking-btn" data-booking-open>ЗАПИСАТЬСЯ НА&nbsp;ПРОЦЕДУРУ</button>
    </div>
  </div>
</section>

<section class="about-procedure">
  <div class="container">
    <h2 class="about-procedure-title">О ПРОЦЕДУРЕ</h2>
    <div class="about-procedure-content">
      <p>Коррекция инъекциями — одна&nbsp;из самых популярных процедур в&nbsp;клинике MEDEA. Это альтернатива пластической хирургии с&nbsp;идеальным соотношением цена-качество. Метод заключается во&nbsp;введении под кожу филлеров — гелеобразных веществ, которые эффективно борются с&nbsp;возрастными изменениями, корректируют дефекты и&nbsp;активируют процессы регенерации подкожных клеток. Процедура обеспечивает долговременный омолаживающий и&nbsp;косметический эффект, а&nbsp;риск побочных эффектов равен нулю при выполнении опытным врачом.</p>
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


<section class="principles-section imperfections-section">
  <div class="container">
    <h2 class="principles-title">КАКИЕ НЕСОВЕРШЕНСТВА<br>УСТРАНЯЕТ ПРОЦЕДУРА</h2>
    <div class="principles-grid">
      <?php
      $list = [
        'МОРЩИНЫ','МЕЛКИЕ ЛИНИИ И ГЛУБОКИЕ СКЛАДКИ НА ЛИЦЕ','СНИЖЕНИЕ УПРУГОСТИ КОЖИ','ОБЪЁМ И КОНТУР СКУЛ',
        'УТРАТА ОБЪЁМА ЛИЦА','АССИМЕТРИЯ','НИЗКИЙ ТОНУС КОЖИ','НЕВЫРАЗИТЕЛЬНЫЕ ЧЕРТЫ ЛИЦА'
      ];
      foreach ($list as $i => $txt): ?>
        <div class="principle-item">
          <div class="principle-number"><?= str_pad((string)($i+1), 2, '0', STR_PAD_LEFT) ?></div>
          <div class="principle-content"><p><?= htmlspecialchars($txt) ?></p></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="about-procedure">
  <div class="container">
    <div class="about-grid">
      <div class="about-top-row">
        <div class="about-text-top-right">
          <h2 class="about-subtitle">КАК ПРОХОДИТ ПРОЦЕДУРА</h2>
          <p>Мы используем только высококачественные, неканцерогенные препараты. Например, филлеры на&nbsp;основе гиалуроновой кислоты не&nbsp;повреждают клетки кожи и&nbsp;не&nbsp;вызывают инфекций. Со&nbsp;временем препараты распадаются на&nbsp;естественные компоненты кожи, которые участвуют в&nbsp;обмене веществ. Например, препараты на&nbsp;основе коллагена при распаде выделяют аминокислоты, которые используются для синтеза белков.</p>
        </div>
        <img class="about-photo about-photo-top-left procedure-photo" src="images/plastika.png" alt="Процедура контурной пластики">
      </div>
    </div>
  </div>
</section>

<section class="zones-section">
  <div class="container">
    <div class="zones-grid">
      <div class="zones-top-row">
        <div class="zones-text">
          <h2 class="zones-title">ЗОНЫ<br>ПРОВЕДЕНИЯ</h2>
          <p class="zones-description">Изначально контурная пластика предназначалась для коррекции носогубных складок, морщин на&nbsp;переносице и&nbsp;моделирования губ. Позже список показаний к&nbsp;применению начал стремительно расти. Сейчас с&nbsp;помощью контурной пластики можно избавиться от&nbsp;носо слезной и&nbsp;подглазничной борозды, морщинистых углов нижней челюсти, гусиных лапок вокруг глаз, нависания бровей. Также процедуру назначают для уменьшения подбородка, коррекции объема ягодиц, щек и&nbsp;скул.</p>
        </div>
        <img src="images/zona.png" alt="Зоны проведения контурной пластики" class="zones-photo">
      </div>
    </div>
  </div>
</section>

<section class="pricing-section">
  <div class="container">
    <h2 class="pricing-title">СТОИМОСТЬ ПРОЦЕДУРЫ</h2>
    <div class="pricing-list">
      <?php for ($i=0; $i<6; $i++): ?>
        <div class="pricing-item">
          <span class="pricing-code">A11.01.013</span>
          <span class="pricing-procedure">КОНТУРНАЯ ПЛАСТИКА</span>
          <span class="pricing-product">RADIESS (РАДИЕС), 1.5 мл</span>
          <span class="pricing-price">65 000 P</span>
          <a href="#" class="pricing-link" data-booking-open>ЗАПИСАТЬСЯ</a>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>


<!-- МОДАЛКИ СТРАНИЦЫ -->
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

<div id="booking-modal" class="modal hidden">
  <div class="modal-overlay"></div>
  <form class="consultation-modal-content">
    <button class="modal-close" data-booking-close>
      <img src="icons/close.svg" alt="Закрыть" class="close-icon">
    </button>
    <h2>ЗАПИСАТЬСЯ<br>НА ПРОЦЕДУРУ</h2>
    <div class="form-fields">
      <div class="form-field">
        <label for="booking-name">ВАШЕ ИМЯ*</label>
        <input type="text" id="booking-name" name="name" required>
        <div class="error-message">Имя должно содержать только буквы (минимум 2 символа)</div>
      </div>
      <div class="form-field">
        <label for="booking-phone">ТЕЛЕФОН*</label>
        <input type="tel" id="booking-phone" name="phone" required>
        <div class="error-message">Введите корректный номер телефона (11 цифр, начинающийся с 7 или 8)</div>
      </div>
    </div>
    <div class="form-footer">
      <div class="form-agreement">
        <input type="checkbox" id="booking-agreement" name="agreement" required>
        <label for="booking-agreement">Я ДАЮ СОГЛАСИЕ НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ<br>В СООТВЕТСТВИИ С ПОЛИТИКОЙ КОНФИДЕНЦИАЛЬНОСТИ</label>
      </div>
      <button type="submit" class="form-submit">ЖДУ ЗВОНКА</button>
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
