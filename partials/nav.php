<?php
// /partials/nav.php
// ОПИСАНИЕ МЕНЮ ДЛЯ ХЭДЕРА, МОБИЛЬНОГО И ФУТЕРА
$NAV = [
  'uslugi'   => ['title' => 'Услуги и цены',     'href' => 'uslugi-i-ceny.php'],
  'results'  => ['title' => 'До/после',           'href' => 'rezultaty-procedur.php'],
  'about'    => ['title' => 'О клинике',          'href' => 'o-klinike.php'],
  'staff'    => ['title' => 'Специалисты',        'href' => 'nashi-specialisty.php'],
  'promo'    => ['title' => 'Акции',              'href' => 'akcii.php'],
  'contacts' => ['title' => 'Контакты',           'href' => 'kontakty.php'],
  'consult'  => ['title' => 'Консультация',       'href' => 'kontakty.php#consult'],
];

// хелпер: определить активный ключ, если не задан $page
if (!isset($page) || !$page) {
  $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/';
  $base = basename($path, '.php');           // e.g. 'uslugi-i-ceny'
  $map = [
    ''                     => 'home',
    'index'                => 'home',
    'uslugi-i-ceny'        => 'uslugi',
    'rezultaty-procedur'   => 'results',
    'o-klinike'            => 'about',
    'nashi-specialisty'    => 'staff',
    'akcii'                => 'promo',
    'kontakty'             => 'contacts',
  ];
  $page = $map[$base] ?? 'home';
}
