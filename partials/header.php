<?php
// /partials/header.php
// Ожидает (не обязательно): $page (ключ из $NAV), $pageTitle (строка)
require_once __DIR__ . '/nav.php';

// БАЗОВЫЙ ВЕБ-ПРЕФИКС ДЛЯ АССЕТОВ (корректно работает и в подпапке)
$BASE = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
if ($BASE === '/') { $BASE = ''; }

if (!isset($pageTitle) || !$pageTitle) {
  $titles = [
    'home'     => 'MEDEA — Центр врачебной косметологии',
    'uslugi'   => 'Услуги и цены — MEDEA',
    'results'  => 'До/после — MEDEA',
    'about'    => 'О клинике — MEDEA',
    'staff'    => 'Специалисты — MEDEA',
    'promo'    => 'Акции — MEDEA',
    'contacts' => 'Контакты — MEDEA',
    'consult'  => 'Консультация — MEDEA',
  ];
  $pageTitle = $titles[$page] ?? 'MEDEA — Центр врачебной косметологии';
}
?>
<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>

    <!-- фавикон-эмоджи -->
    <link rel="icon" type="image/x-icon"
      href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🏥</text></svg>">

    <!-- шрифты/нормалайз/стили -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<?= $BASE ?>/normalize.css">
    <link rel="stylesheet" href="<?= $BASE ?>/styles.css">
  </head>
  <body>

  <header class="site-header">
    <div class="container header-inner">
      <a href="<?= $BASE ?>/index.php" class="logo" aria-label="MEDEA">
        <span class="logo-text-gradient">MEDEA</span>
      </a>

      <button class="burger" aria-label="Открыть меню" aria-expanded="false" aria-controls="mobile-menu">
        <img src="<?= $BASE ?>/icons/burger_menu.svg" alt="Меню" class="burger-icon">
      </button>

      <nav class="main-nav" aria-label="Главная навигация">
        <ul class="nav-list">
          <?php foreach ($NAV as $key => $item): ?>
            <?php
              $isActive = ($key === $page) || ($key === 'consult' && $page === 'contacts');
              $aClass = $isActive ? 'active' : '';
              $ariaCurrent = $isActive ? 'page' : 'false';
            ?>
            <li>
              <a href="<?= htmlspecialchars($item['href']) ?>"
                 class="<?= $aClass ?>"
                 aria-current="<?= $ariaCurrent ?>">
                <?= htmlspecialchars($item['title']) ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>

    <!-- Мобильное меню -->
    <nav id="mobile-menu" class="mobile-nav" aria-label="Мобильная навигация">
      <div class="mobile-nav-header">
        <a href="<?= $BASE ?>/index.php" class="mobile-logo" aria-label="MEDEA">
          <span class="mobile-logo-text-gradient">MEDEA</span>
        </a>
        <button class="mobile-close" aria-label="Закрыть меню">
          <img src="<?= $BASE ?>/icons/close.svg" alt="Закрыть" class="mobile-close-icon">
        </button>
      </div>

      <ul class="mobile-nav-list">
        <?php foreach ($NAV as $key => $item): ?>
          <?php
            $isActive = ($key === $page) || ($key === 'consult' && $page === 'contacts');
            $aClass = $isActive ? 'active' : '';
            $ariaCurrent = $isActive ? 'page' : 'false';
          ?>
          <li>
            <a href="<?= htmlspecialchars($item['href']) ?>"
               class="<?= $aClass . ($key === 'consult' ? ' mobile-consult-btn' : '') ?>"
               aria-current="<?= $ariaCurrent ?>">
              <?= htmlspecialchars($item['title']) ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </header>

  <main>
