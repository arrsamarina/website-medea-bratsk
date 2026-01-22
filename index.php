<?php
// index.php
$page = 'home';
$pageTitle = 'MEDEA — Центр врачебной косметологии';
require __DIR__ . '/partials/header.php';
?>

<!-- НАЧАЛО КОНТЕНТА СТРАНИЦЫ -->

<section class="hero">
  <div class="hero-bg">
    <div class="hero-card">
      <h1 class="hero-title">MEDEA</h1>
      <p class="hero-subtitle">центр врачебной косметологии</p>
    </div>
  </div>
</section>

<section class="about">
  <div class="container">
    <h2>О НАС</h2>
    <div class="about-content">
      <p class="about-text">MEDEA — единственный центр врачебной косметологии с&nbsp;медицинской лицензией в&nbsp;двух районах города Братска.</p>
      <p class="about-text">Мы заботимся о&nbsp;вашей красоте и&nbsp;здоровье с&nbsp;помощью разрешённых к&nbsp;использованию препаратов и&nbsp;медицинского оборудования с&nbsp;регистрационными удостоверениями, опытом и&nbsp;знаниями наших специалистов.</p>
    </div>
  </div>
</section>

<section class="services">
  <div class="container">
    <h2>УСЛУГИ И ЦЕНЫ</h2>
    <ul class="services-grid">
      <li><a class="service-chip" href="uslugi-i-ceny.php#consult">Консультативный<br>приём</a></li>
      <li><a class="service-chip" href="injekcionnaya-kosmetologiya.php">Инъекционная<br>косметология</a></li>
      <li><a class="service-chip" href="uslugi-i-ceny.php#apparat">Аппаратная<br>косметология</a></li>
      <li><a class="service-chip" href="uslugi-i-ceny.php#esthetic">Эстетическая<br>косметология</a></li>
      <li><a class="service-chip" href="uslugi-i-ceny.php#massage">Массаж<br>и обёртывание</a></li>
      <li><a class="service-chip" href="uslugi-i-ceny.php#nail">Ногтевой<br>сервис</a></li>
      <li><a class="service-chip" href="uslugi-i-ceny.php#remove">Удаление<br>новообразований</a></li>
      <li><a class="service-chip" href="uslugi-i-ceny.php#epil">Эпиляция<br>и депиляция</a></li>
      <li><a class="service-chip" href="uslugi-i-ceny.php#sport">Спортивный<br>клуб</a></li>
    </ul>
  </div>
</section>

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

<section class="why-us">
  <div class="container">
    <h2>ПОЧЕМУ МЫ</h2>
    <div class="why-us-grid">
      <div class="why-us-card">
        <h3 class="why-us-category">ЛОКАЦИЯ</h3>
        <p class="why-us-title">УДОБНОЕ РАСПОЛОЖЕНИЕ В ОСНОВНЫХ РАЙОНАХ БРАТСКА</p>
      </div>
      <div class="why-us-card">
        <h3 class="why-us-category">ОБОРУДОВАНИЕ</h3>
        <p class="why-us-title">АППАРАТЫ ПОСЛЕДНЕГО ПОКОЛЕНИЯ</p>
      </div>
      <div class="why-us-card">
        <h3 class="why-us-category">ВЫСОКАЯ КВАЛИФИКАЦИЯ</h3>
        <p class="why-us-title">КОМАНДА ПРОФЕССИОНАЛОВ</p>
      </div>
      <div class="why-us-card">
        <h3 class="why-us-category">КОМПЛЕКСНОСТЬ</h3>
        <p class="why-us-title">10+ ИННОВАЦИОННЫХ МЕТОДИК</p>
      </div>
      <div class="why-us-card">
        <h3 class="why-us-category">ЭКСКЛЮЗИВНОСТЬ</h3>
        <p class="why-us-title">КОСМЕТИКА ПРЕМИАЛЬНЫХ БРЕНДОВ</p>
      </div>
      <div class="why-us-card">
        <h3 class="why-us-category">УВЕРЕННОСТЬ В КАЧЕСТВЕ</h3>
        <p class="why-us-title">МЕДИЦИНСКАЯ ЛИЦЕНЗИЯ</p>
      </div>
    </div>

    <!-- мобильный слайдер "почему мы" -->
    <div class="why-us-mobile-slider">
      <div class="why-us-slider-container">
        <div class="why-us-slider-track">
          <div class="why-us-slide">
            <h3 class="why-us-slide-category">ЛОКАЦИЯ</h3>
            <p class="why-us-slide-title">УДОБНОЕ РАСПОЛОЖЕНИЕ В ОСНОВНЫХ РАЙОНАХ БРАТСКА</p>
          </div>
          <div class="why-us-slide">
            <h3 class="why-us-slide-category">ОБОРУДОВАНИЕ</h3>
            <p class="why-us-slide-title">АППАРАТЫ ПОСЛЕДНЕГО ПОКОЛЕНИЯ</p>
          </div>
          <div class="why-us-slide">
            <h3 class="why-us-slide-category">ВЫСОКАЯ КВАЛИФИКАЦИЯ</h3>
            <p class="why-us-slide-title">КОМАНДА ПРОФЕССИОНАЛОВ</p>
          </div>
          <div class="why-us-slide">
            <h3 class="why-us-slide-category">КОМПЛЕКСНОСТЬ</h3>
            <p class="why-us-slide-title">10+ ИННОВАЦИОННЫХ МЕТОДИК</p>
          </div>
          <div class="why-us-slide">
            <h3 class="why-us-slide-category">ЭКСКЛЮЗИВНОСТЬ</h3>
            <p class="why-us-slide-title">КОСМЕТИКА ПРЕМИАЛЬНЫХ БРЕНДОВ</p>
          </div>
          <div class="why-us-slide">
            <h3 class="why-us-slide-category">УВЕРЕННОСТЬ В КАЧЕСТВЕ</h3>
            <p class="why-us-slide-title">МЕДИЦИНСКАЯ ЛИЦЕНЗИЯ</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="specialists">
  <div class="container">
    <div class="specialists-header">
      <h2>СПЕЦИАЛИСТЫ</h2>
      <div class="specialists-controls">
        <button class="specialists-prev" aria-label="Предыдущие специалисты">
          <img src="icons/button.svg" alt="Назад">
        </button>
        <button class="specialists-next" aria-label="Следующие специалисты">
          <img src="icons/button.svg" alt="Вперед">
        </button>
      </div>
    </div>

    <div class="specialists-container">
      <div class="specialists-slider">
        <a href="o-specialiste.php" class="specialist-card specialist-card-link">
          <img src="images/spec.png" alt="Шевченко Алла Петровна" class="specialist-photo">
          <h3 class="specialist-name">ШЕВЧЕНКО АЛЛА</h3>
          <p class="specialist-title">Главный врач, Дерматолог, Косметолог</p>
        </a>
        <a href="o-specialiste.php" class="specialist-card specialist-card-link">
          <img src="images/spec.png" alt="Бутенко Валерия" class="specialist-photo">
          <h3 class="specialist-name">БУТЕНКО ВАЛЕРИЯ</h3>
          <p class="specialist-title">Дерматолог, Косметолог</p>
        </a>
        <a href="o-specialiste.php" class="specialist-card specialist-card-link">
          <img src="images/spec.png" alt="Образцова Анастасия" class="specialist-photo">
          <h3 class="specialist-name">ОБРАЗЦОВА АНАСТАСИЯ</h3>
          <p class="specialist-title">Дерматолог, Косметолог, Трихолог</p>
        </a>
        <a href="o-specialiste.php" class="specialist-card specialist-card-link">
          <img src="images/spec.png" alt="Петрова Елена" class="specialist-photo">
          <h3 class="specialist-name">ПЕТРОВА ЕЛЕНА</h3>
          <p class="specialist-title">Медицинская сестра в косметологии</p>
        </a>
        <a href="o-specialiste.php" class="specialist-card specialist-card-link">
          <img src="images/spec.png" alt="Козлова Мария" class="specialist-photo">
          <h3 class="specialist-name">КОЗЛОВА МАРИЯ</h3>
          <p class="specialist-title">Косметолог, Эстетист</p>
        </a>
        <a href="o-specialiste.php" class="specialist-card specialist-card-link">
          <img src="images/spec.png" alt="Смирнова Анна" class="specialist-photo">
          <h3 class="specialist-name">СМИРНОВА АННА</h3>
          <p class="specialist-title">Дерматолог, Косметолог</p>
        </a>
      </div>

      <div class="specialists-dots">
        <span class="dot active" data-slide="0"></span>
        <span class="dot" data-slide="1"></span>
        <span class="dot" data-slide="2"></span>
        <span class="dot" data-slide="3"></span>
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

<section class="contacts">
  <div class="container">
    <h2>КАК НАС НАЙТИ</h2>
    <div class="contacts-grid">
      <a href="https://maps.google.com/maps?hl=ru&gl=pl&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x5ce34d1873088e3f:0xd92c56dc88d5bb94" target="_blank" class="contact-card contact-card-link">
        <h3 class="contact-location">ЦЕНТРАЛЬНЫЙ</h3>
        <div class="contact-info">
          <p>Г.&nbsp;БРАТСК, ЦЕНТРАЛЬНЫЙ&nbsp;РАЙОН,<br>УЛ.&nbsp;ДЕПУТАТСКАЯ,&nbsp;ДОМ&nbsp;2</p>
          <p>29-22-200-1</p>
          <p>РАБОТАЕМ С 10:00 ДО 20:00, ЕЖЕДНЕВНО, БЕЗ&nbsp;ВЫХОДНЫХ</p>
          <p class="map-link"><img src="icons/map.svg" alt="Карта" class="map-icon"> Открыть в картах</p>
        </div>
      </a>
      <a href="https://maps.google.com/maps?hl=ru&gl=pl&um=1&ie=UTF-8&fb=1&sa=X&ftid=0x5ce354491ed948a7:0x68c8513a75ad87ea" target="_blank" class="contact-card contact-card-link">
        <h3 class="contact-location">ЭНЕРГЕТИК</h3>
        <div class="contact-info">
          <p>Г.&nbsp;БРАТСК, РАЙОН&nbsp;ЭНЕРГЕТИК,<br>УЛ. СТРОИТЕЛЕЙ, ДОМ 2</p>
          <p>29-22-200-1</p>
          <p>РАБОТАЕМ С 10:00 ДО 20:00, ЕЖЕДНЕВНО, БЕЗ&nbsp;ВЫХОДНЫХ</p>
          <p class="map-link"><img src="icons/map.svg" alt="Карта" class="map-icon"> Открыть в картах</p>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- МОДАЛКИ ЭТОЙ СТРАНИЦЫ -->
<div id="license-modal" class="modal hidden">
  <div class="modal-overlay"></div>
  <div class="modal-content">
    <button class="modal-close" data-modal-close>&times;</button>
    <button class="modal-prev" data-prev>&larr;</button>
    <button class="modal-next" data-next>&rarr;</button>
    <img id="modal-image" src="" alt="Лицензия" class="modal-image">
  </div>
</div>

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

<div id="success-modal" class="success-modal">
  <div class="success-modal-content">
    <h3>Спасибо!</h3>
    <p>Мы с вами свяжемся в ближайшее время!</p>
    <button onclick="closeSuccessModal()">Закрыть</button>
  </div>
</div>

<!-- КОНЕЦ КОНТЕНТА СТРАНИЦЫ -->

<?php require __DIR__ . '/partials/footer.php'; ?>
