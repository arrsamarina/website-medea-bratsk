<?php
// injekcionnaya-kosmetologiya.php
// подсветка в меню "Услуги и цены"
$page = 'uslugi';
$pageTitle = 'Инъекционная косметология — MEDEA';
require __DIR__ . '/partials/header.php';
?>

<!-- НАЧАЛО КОНТЕНТА СТРАНИЦЫ -->

<section class="services-page">
  <div class="container">
    <div class="services-header">
      <a href="index.php" class="back-button" aria-label="Назад">
        <img src="icons/button.svg" alt="Назад">
      </a>
      <h1 class="services-title">ИНЪЕКЦИОННАЯ<br>КОСМЕТОЛОГИЯ</h1>
    </div>

    <div class="injection-content">
      <div class="injection-text">
        <p>Клиника MEDEA заботится о&nbsp;своих пациентах, предлагает широкий выбор услуг инъекционной косметологии для&nbsp;жителей Братска. Мы открываем перед клиентами широкий диапазон возможностей по&nbsp;устранению эстетических недостатков кожного покрова, омоложения кожи, улучшения её качества. Благодаря так называемым уколам красоты, всё это доступно без&nbsp;хирургического вмешательства. Наши специалисты подбирают индивидуальные программы процедур, чтобы&nbsp;каждая пациентка получила максимально естественный и&nbsp;гармоничный результат. Мы используем только сертифицированные препараты и&nbsp;современные методики, обеспечивая безопасность и&nbsp;долгосрочный эффект. Ваше здоровье и&nbsp;красота для&nbsp;нас на&nbsp;первом месте.</p>
      </div>
      <div class="injection-image">
        <img src="images/photo2.png" alt="Инъекционная косметология" class="injection-photo">
      </div>
    </div>
  </div>
</section>

<section class="injection-info-cards">
  <div class="container">
    <div class="injection-info-grid">
      <div class="injection-info-card info-card-special">
        <a href="#" class="injection-info-link">ПОЛЕЗНАЯ ИНФОРМАЦИЯ</a>
      </div>

      <!-- пример ссылок на подстраницы (потом заменю) -->
      <div class="injection-info-card">
        <a href="konturnaya-plastika.php" class="injection-info-link">КОНТУРНАЯ ПЛАСТИКА</a>
      </div>
      <div class="injection-info-card">
        <a href="konturnaya-plastika.php" class="injection-info-link">КОНТУРНАЯ ПЛАСТИКА</a>
      </div>
      <div class="injection-info-card">
        <a href="konturnaya-plastika.php" class="injection-info-link">КОНТУРНАЯ ПЛАСТИКА</a>
      </div>
      <div class="injection-info-card">
        <a href="konturnaya-plastika.php" class="injection-info-link">КОНТУРНАЯ ПЛАСТИКА</a>
      </div>
      <div class="injection-info-card">
        <a href="konturnaya-plastika.php" class="injection-info-link">КОНТУРНАЯ ПЛАСТИКА</a>
      </div>
      <div class="injection-info-card">
        <a href="konturnaya-plastika.php" class="injection-info-link">КОНТУРНАЯ ПЛАСТИКА</a>
      </div>
      <div class="injection-info-card">
        <a href="konturnaya-plastika.php" class="injection-info-link">КОНТУРНАЯ ПЛАСТИКА</a>
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
        <div class="specialist-card">
          <img src="images/spec.png" alt="Шевченко Алла Петровна" class="specialist-photo">
          <h3 class="specialist-name">ШЕВЧЕНКО АЛЛА</h3>
          <p class="specialist-title">ГЛАВНЫЙ ВРАЧ, ДЕРМАТОЛОГ</p>
        </div>
        <div class="specialist-card">
          <img src="images/spec.png" alt="Бутенко Валерия" class="specialist-photo">
          <h3 class="specialist-name">БУТЕНКО ВАЛЕРИЯ</h3>
          <p class="specialist-title">ДЕРМАТОЛОГ, КОСМЕТОЛОГ</p>
        </div>
        <div class="specialist-card">
          <img src="images/spec.png" alt="Образцова Анастасия" class="specialist-photo">
          <h3 class="specialist-name">ОБРАЗЦОВА АНАСТАСИЯ</h3>
          <p class="specialist-title">КОСМЕТОЛОГ, ТРИХОЛОГ</p>
        </div>
        <div class="specialist-card">
          <img src="images/spec.png" alt="Петрова Елена" class="specialist-photo">
          <h3 class="specialist-name">ПЕТРОВА ЕЛЕНА</h3>
          <p class="specialist-title">МЕДИЦИНСКАЯ СЕСТРА</p>
        </div>
        <div class="specialist-card">
          <img src="images/spec.png" alt="Козлова Мария" class="specialist-photo">
          <h3 class="specialist-name">КОЗЛОВА МАРИЯ</h3>
          <p class="specialist-title">КОСМЕТОЛОГ, ЭСТЕТИСТ</p>
        </div>
        <div class="specialist-card">
          <img src="images/spec.png" alt="Смирнова Анна" class="specialist-photo">
          <h3 class="specialist-name">СМИРНОВА АННА</h3>
          <p class="specialist-title">ДЕРМАТОЛОГ, КОСМЕТОЛОГ</p>
        </div>
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

<section class="principles-section">
  <div class="container">
    <h2 class="principles-title">ПРИНЦИПЫ<br>ИНЪЕКЦИОННОЙ КОСМЕТОЛОГИИ</h2>
    <div class="principles-grid">
      <div class="principle-item">
        <div class="principle-number">01</div>
        <div class="principle-content">
          <p>До&nbsp;21-25 лет человеческий организм растет, затем от&nbsp;5&nbsp;до&nbsp;7&nbsp;лет находится в&nbsp;самом расцвете сил, но&nbsp;уже к&nbsp;30 начинается процесс старения. Коллаген и&nbsp;эластин начинают вырабатываться не&nbsp;так интенсивно, быстрее теряется гиалуроновая кислота, на&nbsp;коже начинают появляться морщины, провисания, появляются другие признаки старения.</p>
        </div>
      </div>
      <div class="principle-item">
        <div class="principle-number">02</div>
        <div class="principle-content">
          <p>Инъекционная косметология помогает нивелировать эти факторы. Существует ряд косметологических процедур, основанных на&nbsp;уколах, которые позволяют вводить в&nbsp;глубокие слои кожи различные препараты, сыворотки и&nbsp;омолаживающие коктейли.</p>
        </div>
      </div>
      <div class="principle-item">
        <div class="principle-number">03</div>
        <div class="principle-content">
          <p>Инъекционная косметология позволяет надолго сохранить красоту и&nbsp;здоровье кожи. Процедура длится несколько минут, зато&nbsp;эффект от&nbsp;уколов красоты заметен на&nbsp;протяжении нескольких месяцев. Эстетический фактор играет важную роль в&nbsp;современном мире, об&nbsp;этом тоже не&nbsp;стоит забывать.</p>
        </div>
      </div>
      <div class="principle-item">
        <div class="principle-number">04</div>
        <div class="principle-content">
          <p>Отдельно следует отметить, что&nbsp;у&nbsp;метода инъекций практически нет противопоказаний. В&nbsp;основном они являются относительными, поэтому&nbsp;он подходит практически всем пациентам.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="advantages-section">
  <div class="container">
    <h2 class="advantages-title">ПРЕИМУЩЕСТВА МЕТОДИКИ</h2>
  <div class="advantages-list">
      <div class="advantage-item">
        <div class="advantage-icon">
          <img src="icons/check_mark.svg" alt="Галочка" class="check-icon">
        </div>
        <p>Уколы не&nbsp;причиняют боли, сильного дискомфорта.</p>
      </div>
      <div class="advantage-item">
        <div class="advantage-icon">
          <img src="icons/check_mark.svg" alt="Галочка" class="check-icon">
        </div>
        <p>Введение препаратов под&nbsp;кожу даёт комплексный эффект, улучшает внешний вид кожного покрова, даёт здоровый тон, делает лицо более гладким, ухоженным.</p>
      </div>
      <div class="advantage-item">
        <div class="advantage-icon">
          <img src="icons/check_mark.svg" alt="Галочка" class="check-icon">
        </div>
        <p>Для&nbsp;проведения процедуры, введения препаратов, не&nbsp;требуется анестезия.</p>
      </div>
      <div class="advantage-item">
        <div class="advantage-icon">
          <img src="icons/check_mark.svg" alt="Галочка" class="check-icon">
        </div>
        <p>У&nbsp;клиентов нашей клиники есть возможность использовать методику и&nbsp;вести привычный образ жизни.</p>
      </div>
      <div class="advantage-item">
        <div class="advantage-icon">
          <img src="icons/check_mark.svg" alt="Галочка" class="check-icon">
        </div>
        <p>Эффект от&nbsp;процедуры длится очень долго. Со&nbsp;временем он&nbsp;становится более выраженным.</p>
      </div>
      <div class="advantage-item">
        <div class="advantage-icon">
          <img src="icons/check_mark.svg" alt="Галочка" class="check-icon">
        </div>
        <p>Стоимость инъекционной медицины значительно ниже, чем&nbsp;хирургическое вмешательство.</p>
      </div>
      <div class="advantage-item">
        <div class="advantage-icon">
          <img src="icons/check_mark.svg" alt="Галочка" class="check-icon">
        </div>
        <p>Нет восстановительного периода после&nbsp;сеансов.</p>
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
          <div class="error-message">Введите корректный номер телефона (11 цифр, начинающийся с&nbsp;7 или&nbsp;8)</div>
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

<!-- МОДАЛКИ ЭТОЙ СТРАНИЦЫ -->
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
        <div class="error-message">Введите корректный номер телефона (11 цифр, начинающийся с&nbsp;7 или&nbsp;8)</div>
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
    <p>Мы с&nbsp;вами свяжемся в&nbsp;ближайшее время!</p>
    <button onclick="closeSuccessModal()">Закрыть</button>
  </div>
</div>

<!-- КОНЕЦ КОНТЕНТА СТРАНИЦЫ -->

<?php require __DIR__ . '/partials/footer.php'; ?>
