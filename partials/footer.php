<?php
// /partials/footer.php
require_once __DIR__ . '/nav.php';
$BASE = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
if ($BASE === '/') { $BASE = ''; }
?>
  </main>

  <footer class="site-footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-column footer-company">
          <h3 class="footer-logo-gradient">MEDEA</h3>
          <p class="footer-description">
            Единственный центр врачебной косметологии с&nbsp;медицинской лицензией в&nbsp;самом центре Братска.
          </p>
          <p class="footer-description">
            Заботимся о&nbsp;вашей красоте и&nbsp;здоровье с&nbsp;помощью разрешённых к&nbsp;использованию препаратов
            и&nbsp;медицинского оборудования с&nbsp;регистрационными удостоверениями, опытом и&nbsp;знаниями наших специалистов.
          </p>
          <div class="footer-social">
            <a href="#" class="social-link" aria-label="VK"><img src="<?= $BASE ?>/icons/vk.svg" alt="VK" class="social-icon"></a>
            <a href="#" class="social-link" aria-label="Instagram"><img src="<?= $BASE ?>/icons/inst.svg" alt="Instagram" class="social-icon"></a>
            <a href="#" class="social-link" aria-label="Telegram"><img src="<?= $BASE ?>/icons/tg.svg" alt="Telegram" class="social-icon"></a>
            <a href="#" class="social-link" aria-label="WhatsApp"><img src="<?= $BASE ?>/icons/whats.svg" alt="WhatsApp" class="social-icon"></a>
          </div>
        </div>

        <div class="footer-nav-contacts-container">
          <div class="footer-column footer-nav">
            <h4 class="footer-title">КЛИНИКА</h4>
            <nav class="footer-nav-links">
              <?php foreach ($NAV as $key => $item): ?>
                <?php
                  $isActive = ($key === $page) || ($key === 'consult' && $page === 'contacts');
                  $aClass = $isActive ? 'active' : '';
                ?>
                <a href="<?= htmlspecialchars($item['href']) ?>" class="<?= $aClass ?>">
                  <?= htmlspecialchars(mb_strtoupper($item['title'])) ?>
                </a>
              <?php endforeach; ?>
            </nav>
          </div>

          <div class="footer-column footer-contacts">
            <h4 class="footer-title">КОНТАКТЫ</h4>
            <div class="footer-contact-info">
              <div class="contact-item">
                <p class="contact-address">ДЕПУТАТСКАЯ, 2</p>
                <p class="contact-phone">29-22-200-1</p>
              </div>
              <div class="contact-item">
                <p class="contact-address">СТРОИТЕЛЕЙ, 2</p>
                <p class="contact-phone">29-22-200-1</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-copyright">
        <p>© <?= date('Y') ?> medea-bratsk.ru</p>
      </div>
    </div>
  </footer>

  <!-- Скрипты проекта -->
  <script src="<?= $BASE ?>/main.js" defer></script>
  </body>
</html>
