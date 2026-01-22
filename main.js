(function () {
	"use strict";
  
	/* ------------------------------
	   открытие и закрытие модалок, обработчик кликов
	--------------------------------*/
	/*идея: единый делегированный слушатель на документе. 
	позволяет любым кнопкам с data-modal-open="id_модалки" открыть модалку, 
	а любому элементу с data-modal-close — закрыть ближайшую .modal.
	*/
	document.addEventListener("click", function (e) {
	  const openBtn = e.target.closest("[data-modal-open]");
	  if (openBtn) {
		const id = openBtn.getAttribute("data-modal-open");
		const modal = document.getElementById(id);
		if (modal) {
		  modal.classList.remove("hidden");
		}
	  }
	  const closeBtn = e.target.closest("[data-modal-close]");
	  if (closeBtn) {
		const modal = closeBtn.closest(".modal");
		if (modal) {
		  modal.classList.add("hidden");
		}
	  }
	});
  
	/* ------------------------------
	   бургер-меню для мобилки
	--------------------------------*/
	document.addEventListener("DOMContentLoaded", function () {
	//идея: управляет мобильной навигацией. Когда меню открыто — запрещает прокрутку страницы (body-lock).
	  const burger = document.querySelector(".burger");
	  const panel = document.getElementById("mobile-menu");
	  const closeBtn = document.querySelector(".mobile-close");
	  if (!burger || !panel) return;
  
	  const body = document.body;
  
	  function toggleMenu(force) {
		// переключает/устанавливает класс .is-open у панели
    	// переключает .is-active у бургер-кнопки
    	// обновляет aria-expanded
    	// вешает/снимает .body-lock на body (блок скролла)
		const isOpen =
		  typeof force === "boolean" ? force : !panel.classList.contains("is-open");
		panel.classList.toggle("is-open", isOpen);
		burger.classList.toggle("is-active", isOpen);
		burger.setAttribute("aria-expanded", String(isOpen));
		body.classList.toggle("body-lock", isOpen);
	  }
	  // клики по бургеру/крестику/ссылкам, Esc
	  burger.addEventListener("click", function () {
		toggleMenu();
	  });
	  if (closeBtn)
		closeBtn.addEventListener("click", function () {
		  toggleMenu(false);
		});
  
	  panel.addEventListener("click", function (e) {
		if (e.target.tagName === "A") {
		  toggleMenu(false);
		}
	  });
  
	  document.addEventListener("keydown", function (e) {
		if (e.key === "Escape") {
		  toggleMenu(false);
		}
	  });
	});
  
	/* ------------------------------
	   модальное окно лицензий
	--------------------------------*/
	document.addEventListener("DOMContentLoaded", function () {
	  const modal = document.getElementById("license-modal");
	  const modalImage = document.getElementById("modal-image");
	  const licenseImages = document.querySelectorAll(".license-image");
	  const prevBtn = document.querySelector("[data-prev]");
	  const nextBtn = document.querySelector("[data-next]");
	  const closeBtn = document.querySelector("[data-modal-close]");
  
	  if (!modal || !modalImage) return;
  
	  const licenses = [
		"images/licence1.png",
		"images/licence2.png",
		"images/licence3.png",
	  ];
	  let currentIndex = 0;
  
	  function openModal(index) {
		currentIndex = index;
		modalImage.src = licenses[currentIndex];
		modal.classList.remove("hidden");
		document.body.classList.add("body-lock");
	  }
  
	  function closeModal() {
		modal.classList.add("hidden");
		document.body.classList.remove("body-lock");
	  }
  
	  function showPrev() {
		currentIndex = currentIndex > 0 ? currentIndex - 1 : licenses.length - 1;
		modalImage.src = licenses[currentIndex];
	  }
  
	  function showNext() {
		currentIndex = currentIndex < licenses.length - 1 ? currentIndex + 1 : 0;
		modalImage.src = licenses[currentIndex];
	  }
  
	  licenseImages.forEach((img, index) => {
		img.addEventListener("click", () => openModal(index));
	  });
  
	  if (closeBtn) closeBtn.addEventListener("click", closeModal);
  
	  if (modal)
		modal.addEventListener("click", function (e) {
		  if (e.target === modal || e.target.classList.contains("modal-overlay")) {
			closeModal();
		  }
		});
  
	  if (prevBtn) prevBtn.addEventListener("click", showPrev);
	  if (nextBtn) nextBtn.addEventListener("click", showNext);
  
	  document.addEventListener("keydown", function (e) {
		if (modal.classList.contains("hidden")) return;
		if (e.key === "Escape") closeModal();
		if (e.key === "ArrowLeft") showPrev();
		if (e.key === "ArrowRight") showNext();
	  });
	});
  
	/* ------------------------------
	   плейсхолдер без анимаций
	--------------------------------*/
	document.addEventListener("DOMContentLoaded", function () {
	  //просто заглушка — для будущих эффектов/переносов.
	});
  
	/* ------------------------------
	   модалка "консультация"
	--------------------------------*/
	document.addEventListener("DOMContentLoaded", function () {
	//идея: модалка + отправка формы через fetch с простой индикацией загрузки и показом «спасибо».
	  const consultationModal = document.getElementById("consultation-modal");
	  const consultationCloseBtn = document.querySelector(
		"[data-consultation-close]"
	  );
	  const consultationLinks = document.querySelectorAll('a[href*="consult"]');

	  if (!consultationModal) return;

	  function openConsultationModal() {
		consultationModal.classList.remove("hidden");
		document.body.classList.add("body-lock");
	  }

	  function closeConsultationModal() {
		consultationModal.classList.add("hidden");
		document.body.classList.remove("body-lock");
	  }

	  consultationLinks.forEach((link) => {
		link.addEventListener("click", function (e) {
		  e.preventDefault();
		  openConsultationModal();
		});
	  });

	  if (consultationCloseBtn)
		consultationCloseBtn.addEventListener("click", closeConsultationModal);

	  if (consultationModal)
		consultationModal.addEventListener("click", function (e) {
		  if (
			e.target === consultationModal ||
			e.target.classList.contains("modal-overlay")
		  ) {
			closeConsultationModal();
		  }
		});

	  document.addEventListener("keydown", function (e) {
		if (consultationModal.classList.contains("hidden")) return;
		if (e.key === "Escape") closeConsultationModal();
	  });

	  const consultationForm = consultationModal.querySelector(
		".consultation-modal-content"
	  );
	  if (consultationForm) {
		consultationForm.action = 'submit_consultation.php';
		consultationForm.method = 'POST';
		
		consultationForm.addEventListener("submit", function (e) {
		  e.preventDefault();
		  if (validateForm(consultationForm)) {
			// меняем текст кнопки на "ОТПРАВКА...", disabled=true
      		// собираем FormData и отправляем fetch POST на submit_consultation.php
      		// если ok: showSuccessModal(); закрыть модалку, reset формы
      		// в любом случае вернуть исходный текст и disabled=false

			// индикатор загрузки
			const submitBtn = consultationForm.querySelector('button[type="submit"]');
			const originalText = submitBtn.textContent;
			submitBtn.textContent = 'ОТПРАВКА...';
			submitBtn.disabled = true;
			
			// нужно для отправки
			const formData = new FormData(consultationForm);
			
			// отправляем форму на сервер
			fetch('submit_consultation.php', {
			  method: 'POST',
			  body: formData
			})
			.then(response => {
			  if (response.ok) {
				showSuccessModal();
				closeConsultationModal();
				consultationForm.reset();
			  } else {
				throw new Error('Ошибка сервера');
			  }
			})
			.catch(error => {
			  console.error('Ошибка:', error);
			  alert('Произошла ошибка при отправке формы. Попробуйте позже.');
			})
			.finally(() => {
			  // возвращаем кнопку
			  submitBtn.textContent = originalText;
			  submitBtn.disabled = false;
			});
		  }
		});
	  }
	});

	/* ------------------------------
	   модалка "запись на процедуру"
	--------------------------------*/
	document.addEventListener("DOMContentLoaded", function () {
		// логика похожа на модалку "консультация"
	  const bookingModal = document.getElementById("booking-modal");
	  const bookingCloseBtn = document.querySelector(
		"[data-booking-close]"
	  );
	  const bookingLinks = document.querySelectorAll("[data-booking-open]");

	  if (!bookingModal) return;

	  function openBookingModal() {
		bookingModal.classList.remove("hidden");
		document.body.classList.add("body-lock");
	  }

	  function closeBookingModal() {
		bookingModal.classList.add("hidden");
		document.body.classList.remove("body-lock");
	  }

	  bookingLinks.forEach((link) => {
		link.addEventListener("click", function (e) {
		  e.preventDefault();
		  openBookingModal();
		});
	  });

	  if (bookingCloseBtn)
		bookingCloseBtn.addEventListener("click", closeBookingModal);

	  if (bookingModal)
		bookingModal.addEventListener("click", function (e) {
		  if (
			e.target === bookingModal ||
			e.target.classList.contains("modal-overlay")
		  ) {
			closeBookingModal();
		  }
		});

	  document.addEventListener("keydown", function (e) {
		if (bookingModal.classList.contains("hidden")) return;
		if (e.key === "Escape") closeBookingModal();
	  });

	  const bookingForm = bookingModal.querySelector(
		".consultation-modal-content"
	  );
	  if (bookingForm) {
		bookingForm.action = 'submit_consultation.php';
		bookingForm.method = 'POST';
		
		bookingForm.addEventListener("submit", function (e) {
		  e.preventDefault();
		  if (validateForm(bookingForm)) {
			// индикатор загрузки
			const submitBtn = bookingForm.querySelector('button[type="submit"]');
			const originalText = submitBtn.textContent;
			submitBtn.textContent = 'ОТПРАВКА...';
			submitBtn.disabled = true;
			
			// нужно для отправки
			const formData = new FormData(bookingForm);
			
			// отправка формы на сервер
			fetch('submit_consultation.php', {
			  method: 'POST',
			  body: formData
			})
			.then(response => {
			  if (response.ok) {
				showSuccessModal();
				closeBookingModal();
				bookingForm.reset();
			  } else {
				throw new Error('Ошибка сервера');
			  }
			})
			.catch(error => {
			  console.error('Ошибка:', error);
			  alert('Произошла ошибка при отправке формы. Попробуйте позже.');
			})
			.finally(() => {
			  // возврат кнопки
			  submitBtn.textContent = originalText;
			  submitBtn.disabled = false;
			});
		  }
		});
	  }
	});
  
  
	/* ============================================================
	   выравнивание блока заголовка страницы (кнопка назад + h1)
	   - одна строка: контейнер центрируется по высоте (кнопка и h1 по центру)
	   - 2+ строки: контейнер выравнивается по верху (кнопка цепляется за 1-ю строку)
	============================================================ */
	document.addEventListener("DOMContentLoaded", function () {
	//идея: аккуратное поведение макета для заголовков, которые могут переноситься на 2–3 строки.
	  const containers = document.querySelectorAll(
		".services-header, .page-header"
	  );
	  if (!containers.length) return;
  
	  function getLineHeightPx(el) {
		const cs = getComputedStyle(el);
		const lh = cs.lineHeight;
		if (lh === "normal" || lh === "inherit" || lh === "initial" || lh === "unset") {
		  return parseFloat(cs.fontSize) * 1.2; // эвристика для normal
		}
		// может быть в px или в числе (без единиц)
		if (lh.endsWith("px")) return parseFloat(lh);
		const num = parseFloat(lh);
		if (!Number.isNaN(num)) return num;
		// запасной вариант
		return el.getBoundingClientRect().height;
	  }
  
	  function isSingleLine(h) {
		if (!h) return true;
		const rectH = h.getBoundingClientRect().height;
		const lh = getLineHeightPx(h);
		// допускаем небольшой люфт на дробные пиксели
		return rectH <= lh * 1.3;
	  }
  
	  function updateHeaders() {
		containers.forEach((ct) => {
		  const h1 = ct.querySelector(".services-title, h1");
		  if (!h1) return;
		  ct.classList.toggle("is-single-line", isSingleLine(h1));
		});
	  }
  
	  // что-то важное
	  let resizeRaf = null;
	  function scheduleUpdate() {
		if (resizeRaf) cancelAnimationFrame(resizeRaf);
		resizeRaf = requestAnimationFrame(updateHeaders);
	  }
  
	  // запускаем после загрузки шрифтов (чтобы метрики были точны)
	  if (document.fonts && document.fonts.ready) {
		document.fonts.ready.then(scheduleUpdate);
	  } else {
		window.addEventListener("load", scheduleUpdate, { once: true });
	  }
	  // и сразу на всякий случай
	  scheduleUpdate();
  
	  window.addEventListener("resize", scheduleUpdate);
	  window.addEventListener("orientationchange", scheduleUpdate);
	});
  })();

  // слайдер фотогалереи
  (function() {
	//идея: один и тот же блок работает по-разному на мобиле (горизонтальный скролл) и на десктопе (translateX с кнопками/точками).
	const gallerySlider = document.querySelector('.gallery-slider');
	const galleryDots = document.querySelectorAll('.dot');
	const prevBtn = document.querySelector('.gallery-prev');
	const nextBtn = document.querySelector('.gallery-next');
	const galleryContainer = document.querySelector('.gallery-container');
	
	if (!gallerySlider) return;
	
	let currentSlide = 0;
	const totalSlides = gallerySlider.children.length;
	
	// проверка на мобильное устройство
	function isMobile() {
	  return window.innerWidth <= 768;
	}
	
	function updateSlider() {
	  if (isMobile()) {
		// На мобильных устройствах не используем transform
		return;
	  }
	  
	  const translateX = -currentSlide * 100;
	  gallerySlider.style.transform = `translateX(${translateX}%)`;
	  
	  // обновляем dots
	  galleryDots.forEach((dot, index) => {
		dot.classList.toggle('active', index === currentSlide);
	  });
	}
	
	function updateButtons() {
	  if (isMobile()) {
		// на мобильных устройствах кнопки скрыты
		return;
	  }
	  
	  // отключаем кнопку "назад" если мы на первом слайде
	  if (prevBtn) {
		prevBtn.style.opacity = currentSlide === 0 ? '0.3' : '1';
		prevBtn.style.pointerEvents = currentSlide === 0 ? 'none' : 'auto';
	  }
	  
	  // отключаем кнопку "вперед" если мы на последнем слайде
	  if (nextBtn) {
		nextBtn.style.opacity = currentSlide === totalSlides - 1 ? '0.3' : '1';
		nextBtn.style.pointerEvents = currentSlide === totalSlides - 1 ? 'none' : 'auto';
	  }
	}
	
	function nextSlide() {
	  if (isMobile()) {
		// на мобильных устройствах прокручиваем контейнер
		if (galleryContainer) {
		  const slideWidth = galleryContainer.offsetWidth - 32; // учитываем отступы по краям
		  galleryContainer.scrollBy({
			left: slideWidth + 16, // добавляем промежутки между слайдами
			behavior: 'smooth'
		  });
		}
		return;
	  }
	  
	  if (currentSlide < totalSlides - 1) {
		currentSlide++;
		updateSlider();
		updateButtons();
	  }
	}
	
	function prevSlide() {
	  if (isMobile()) {
		// на мобильных устройствах прокручиваем контейнер
		if (galleryContainer) {
		  const slideWidth = galleryContainer.offsetWidth - 32; // учитываем отступы по краям
		  galleryContainer.scrollBy({
			left: -(slideWidth + 16), // добавляем промежутки между слайдами
			behavior: 'smooth'
		  });
		}
		return;
	  }
	  
	  if (currentSlide > 0) {
		currentSlide--;
		updateSlider();
		updateButtons();
	  }
	}
	
	function goToSlide(slideIndex) {
	  if (isMobile()) {
		// на мобильных устройствах прокручиваем к нужному слайду
		if (galleryContainer) {
		  const slideWidth = galleryContainer.offsetWidth - 32; // учитываем отступы по краям
		  const gap = 16; // добавляем промежутки между слайдами
		  galleryContainer.scrollTo({
			left: (slideWidth + gap) * slideIndex,
			behavior: 'smooth'
		  });
		}
		return;
	  }
	  
	  currentSlide = slideIndex;
	  updateSlider();
	  updateButtons();
	}
	
	// Event listeners (только на десктопе)
	if (!isMobile()) {
	  if (nextBtn) nextBtn.addEventListener('click', nextSlide);
	  if (prevBtn) prevBtn.addEventListener('click', prevSlide);
	  
	  galleryDots.forEach((dot, index) => {
		dot.addEventListener('click', () => goToSlide(index));
	  });
	  
	  // инициализация кнопок
	  updateButtons();
	}
	
	// обработчик изменения размера окна
	window.addEventListener('resize', function() {
	  if (isMobile()) {
		// на мобильных устройствах сбрасываем transform
		gallerySlider.style.transform = 'none';
	  } else {
		// на десктопе восстанавливаем работу слайдера
		updateSlider();
		updateButtons();
	  }
	});
	
	// Auto-play (optional) - отключено
	// let autoPlayInterval;
	// function startAutoPlay() {
	//   autoPlayInterval = setInterval(nextSlide, 2500);
	// }
	
	// function stopAutoPlay() {
	//   clearInterval(autoPlayInterval);
	// }
	
	// Start auto-play - отключено
	// startAutoPlay();
	
	// Pause on hover - отключено
	// const galleryContainer = document.querySelector('.gallery-container');
	// if (galleryContainer) {
	//   galleryContainer.addEventListener('mouseenter', stopAutoPlay);
	//   galleryContainer.addEventListener('mouseleave', startAutoPlay);
	// }
  })();

  // скроллер лицензии мобилка
  (function() {
	const licenseSliderTrack = document.querySelector('.license-slider-track');
	
	if (!licenseSliderTrack) return;
	
	let currentSlide = 0;
	const totalSlides = licenseSliderTrack.children.length;
	
	function updateLicenseSlider() {
	  const translateX = -currentSlide * 33.333;
	  licenseSliderTrack.style.transform = `translateX(${translateX}%)`;
	}
	
	function nextLicenseSlide() {
	  currentSlide = (currentSlide + 1) % totalSlides;
	  updateLicenseSlider();
	}
	
	// Auto-play for license slider - 7 seconds interval
	let licenseAutoPlayInterval;
	function startLicenseAutoPlay() {
	  licenseAutoPlayInterval = setInterval(nextLicenseSlide, 7000);
	}
	
	function stopLicenseAutoPlay() {
	  clearInterval(licenseAutoPlayInterval);
	}
	
	// Start auto-play
	startLicenseAutoPlay();
	
	// Pause on hover
	const licenseSliderContainer = document.querySelector('.license-slider-container');
	if (licenseSliderContainer) {
	  licenseSliderContainer.addEventListener('mouseenter', stopLicenseAutoPlay);
	  licenseSliderContainer.addEventListener('mouseleave', startLicenseAutoPlay);
	}
  })();


  (function() {
	const whyUsSlides = document.querySelectorAll('.why-us-slide');
	
	if (!whyUsSlides.length) return;
	
	let currentSlide = 0;
	const totalSlides = whyUsSlides.length;
	let isTransitioning = false;
	
	// Initialize - show first slide
	whyUsSlides[0].classList.add('active');
	
	function updateWhyUsSlider() {
	  // Remove active class from all slides
	  whyUsSlides.forEach(slide => slide.classList.remove('active'));
	  
	  // Add active class to current slide
	  whyUsSlides[currentSlide].classList.add('active');
	}
	
	function nextWhyUsSlide() {
	  if (isTransitioning) return;
	  isTransitioning = true;
	  
	  currentSlide = (currentSlide + 1) % totalSlides;
	  updateWhyUsSlider();
	  
	  // Reset transition flag after animation completes
	  setTimeout(() => {
		isTransitioning = false;
	  }, 800);
	}
	
	function prevWhyUsSlide() {
	  if (isTransitioning) return;
	  isTransitioning = true;
	  
	  currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
	  updateWhyUsSlider();
	  
	  // Reset transition flag after animation completes
	  setTimeout(() => {
		isTransitioning = false;
	  }, 800);
	}
	
	// Touch/swipe support
	let startY = 0;
	let endY = 0;
	
	const whyUsSliderContainer = document.querySelector('.why-us-slider-container');
	if (whyUsSliderContainer) {
	  whyUsSliderContainer.addEventListener('touchstart', (e) => {
		startY = e.touches[0].clientY;
	  });
	  
	  whyUsSliderContainer.addEventListener('touchend', (e) => {
		endY = e.changedTouches[0].clientY;
		const diff = startY - endY;
		
		// Swipe up (next slide)
		if (diff > 50) {
		  nextWhyUsSlide();
		}
		// Swipe down (previous slide) - optional
		else if (diff < -50) {
		  prevWhyUsSlide();
		}
	  });
	}
	
	// Auto-play for why us slider with fade effect
	let whyUsAutoPlayInterval;
	function startWhyUsAutoPlay() {
	  whyUsAutoPlayInterval = setInterval(() => {
		if (!isTransitioning) {
		  nextWhyUsSlide();
		}
	  }, 3000); // Auto-change every 3 seconds
	}
	
	function stopWhyUsAutoPlay() {
	  clearInterval(whyUsAutoPlayInterval);
	}
	
	// Start auto-play
	startWhyUsAutoPlay();
	
	// Click/tap support for manual slide change
	if (whyUsSliderContainer) {
	  whyUsSliderContainer.addEventListener('click', (e) => {
		e.preventDefault();
		nextWhyUsSlide();
		
		// Restart auto-play after manual interaction
		stopWhyUsAutoPlay();
		setTimeout(startWhyUsAutoPlay, 3000);
	  });
	}
	
	// Pause on hover/touch
	if (whyUsSliderContainer) {
	  whyUsSliderContainer.addEventListener('mouseenter', stopWhyUsAutoPlay);
	  whyUsSliderContainer.addEventListener('mouseleave', startWhyUsAutoPlay);
	  whyUsSliderContainer.addEventListener('touchstart', stopWhyUsAutoPlay);
	  whyUsSliderContainer.addEventListener('touchend', () => {
		setTimeout(startWhyUsAutoPlay, 1500);
	  });
	}
  })();

  // Specialists Slider
  (function() {
	const specialistsSlider = document.querySelector('.specialists-slider');
	const specialistsDots = document.querySelectorAll('.specialists-dots .dot');
	const specialistsPrevBtn = document.querySelector('.specialists-prev');
	const specialistsNextBtn = document.querySelector('.specialists-next');
	
	if (!specialistsSlider) return;
	
	let currentSlide = 0;
	const totalSpecialists = specialistsSlider.children.length;
	const maxSlides = totalSpecialists - 3; // Показываем 3, максимум слайдов = общее количество - 3
	
	function isMobile() {
	  return window.innerWidth <= 768;
	}
	
	function updateSpecialistsSlider() {
	  if (isMobile()) return; // На мобильных не используем transform
	  
	  const cardWidth = specialistsSlider.children[0].offsetWidth + 32; // ширина карточки + gap
	  const translateX = -currentSlide * cardWidth;
	  specialistsSlider.style.transform = `translateX(${translateX}px)`;
	}
	
	function updateDots() {
	  if (isMobile()) return; // На мобильных скрыты точки
	  
	  specialistsDots.forEach((dot, index) => {
		dot.classList.toggle('active', index === currentSlide);
	  });
	}
	
	function updateButtons() {
	  if (isMobile()) return; // На мобильных скрыты кнопки
	  
	  // Отключаем кнопку "назад" если мы на первом слайде
	  if (specialistsPrevBtn) {
		specialistsPrevBtn.style.opacity = currentSlide === 0 ? '0.3' : '1';
		specialistsPrevBtn.style.pointerEvents = currentSlide === 0 ? 'none' : 'auto';
	  }
	  
	  // Отключаем кнопку "вперед" если мы на последнем слайде
	  if (specialistsNextBtn) {
		specialistsNextBtn.style.opacity = currentSlide === maxSlides ? '0.3' : '1';
		specialistsNextBtn.style.pointerEvents = currentSlide === maxSlides ? 'none' : 'auto';
	  }
	}
	
	function nextSpecialistsSlide() {
	  if (isMobile()) return; // На мобильных не работает
	  
	  if (currentSlide < maxSlides) {
		currentSlide++;
		updateSpecialistsSlider();
		updateDots();
		updateButtons();
	  }
	}
	
	function prevSpecialistsSlide() {
	  if (isMobile()) return; // На мобильных не работает
	  
	  if (currentSlide > 0) {
		currentSlide--;
		updateSpecialistsSlider();
		updateDots();
		updateButtons();
	  }
	}
	
	function goToSpecialistsSlide(slideIndex) {
	  if (isMobile()) return; // На мобильных не работает
	  
	  if (slideIndex >= 0 && slideIndex <= maxSlides) {
		currentSlide = slideIndex;
		updateSpecialistsSlider();
		updateDots();
		updateButtons();
	  }
	}
	
	// Button navigation (только на десктопе)
	if (specialistsPrevBtn && !isMobile()) {
	  specialistsPrevBtn.addEventListener('click', prevSpecialistsSlide);
	}
	
	if (specialistsNextBtn && !isMobile()) {
	  specialistsNextBtn.addEventListener('click', nextSpecialistsSlide);
	}
	
	// Touch/swipe support (только на десктопе)
	if (!isMobile()) {
	  let startX = 0;
	  let endX = 0;
	  
	  const specialistsContainer = document.querySelector('.specialists-container');
	  if (specialistsContainer) {
		specialistsContainer.addEventListener('touchstart', (e) => {
		  startX = e.touches[0].clientX;
		});
		
		specialistsContainer.addEventListener('touchend', (e) => {
		  endX = e.changedTouches[0].clientX;
		  const diff = startX - endX;
		  
		  // Swipe left (next slide)
		  if (diff > 50) {
			nextSpecialistsSlide();
		  }
		  // Swipe right (previous slide)
		  else if (diff < -50) {
			prevSpecialistsSlide();
		  }
		});
	  }
	}
	
	// Dots navigation (только на десктопе)
	if (!isMobile()) {
	  specialistsDots.forEach((dot, index) => {
		dot.addEventListener('click', () => goToSpecialistsSlide(index));
	  });
	}
	
	// Инициализация (только на десктопе)
	if (!isMobile()) {
	  updateButtons();
	}
	
	// Recalculate on window resize
	window.addEventListener('resize', () => {
	  if (!isMobile()) {
		updateSpecialistsSlider();
		updateButtons();
	  }
	});
  })();

  // 
  (function() {
	document.addEventListener('DOMContentLoaded', function() {
	  // получаем текущий URL и извлекаем имя файла
	  const currentPath = window.location.pathname;
	  const currentPage = currentPath.split('/').pop() || 'index.html';
	  
	  // маппинг страниц для корректного определения активного состояния
	  const pageMapping = {
		'index.html': 'index.html',
		'uslugi-i-ceny.html': 'uslugi-i-ceny.html',
		'rezultaty-procedur.html': 'rezultaty-procedur.html',
		'o-klinike.html': 'o-klinike.html',
		'nashi-specialisty.html': 'nashi-specialisty.html',
		'akcii.html': 'akcii.html',
		'kontakty.html': 'kontakty.html'
	  };
	  
	  // ф-ция для добавления активного класса к ссылкам
	  function setActiveNavigation() {
		// убираем активный класс со всех ссылок
		const allNavLinks = document.querySelectorAll('.main-nav a, .mobile-nav-list a');
		allNavLinks.forEach(link => link.classList.remove('active'));
		
		// определяем, какая страница должна быть активной
		let activePage = currentPage;
		
		// спец обработка для главной страницы
		if (currentPage === '' || currentPage === 'index.html') {
		  activePage = 'index.html';
		}
		
		// находим и активируем соответствующие ссылки
		allNavLinks.forEach(link => {
		  const href = link.getAttribute('href');
		  if (href === activePage) {
			link.classList.add('active');
		  }
		});
	  }
	  
	  // запуск функцию при загрузке страницы
	  setActiveNavigation();
	});
	
	/* ------------------------------
	   ФОРМЫ ВАЛИДАЦИЯ И ОБРАБОТКА
	--------------------------------*/
	
	// ф-ции валидации
	function validateName(name) {
	  return /^[а-яёА-ЯЁa-zA-Z\s]+$/u.test(name.trim()) && name.trim().length >= 2;
	}
	
	function validatePhone(phone) {
	  const cleanPhone = phone.replace(/\D/g, '');
	  return cleanPhone.length === 11 && /^[78]/.test(cleanPhone);
	}
	
	function validateEmail(email) {
	  if (!email.trim()) return true; // email не обязательный
	  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.trim());
	}
	
	function validateForm(form) {
	  let isValid = true;
	  
	  // валидация имени (только для форм консультации)
	  const nameInput = form.querySelector('input[name="name"]');
	  if (nameInput) {
		const nameValue = nameInput.value.trim();
		if (!nameValue || !validateName(nameValue)) {
		  showFieldError(nameInput);
		  isValid = false;
		} else {
		  clearFieldError(nameInput);
		}
	  }
	  
	  // валидация телефона (только для форм консультации)
	  const phoneInput = form.querySelector('input[name="phone"]');
	  if (phoneInput) {
		const phoneValue = phoneInput.value.trim();
		if (!phoneValue || !validatePhone(phoneValue)) {
		  showFieldError(phoneInput);
		  isValid = false;
		} else {
		  clearFieldError(phoneInput);
		}
	  }
	  
	  // валидация email
	  const emailInput = form.querySelector('input[name="email"]');
	  if (emailInput) {
		const emailValue = emailInput.value.trim();
		// для промо-формы email обязателен, для консультации - необязателен
		if (form.classList.contains('promo-form')) {
		  if (!emailValue || !validateEmail(emailValue)) {
			showFieldError(emailInput);
			isValid = false;
		  } else {
			clearFieldError(emailInput);
		  }
		} else {
		  // для форм консультации email необязателен
		  if (emailValue && !validateEmail(emailValue)) {
			showFieldError(emailInput);
			isValid = false;
		  } else {
			clearFieldError(emailInput);
		  }
		}
	  }
	  
	  // валидация согласия
	  const agreementInput = form.querySelector('input[name="agreement"]');
	  if (agreementInput && !agreementInput.checked) {
		alert('Необходимо дать согласие на обработку персональных данных');
		isValid = false;
	  }
	  
	  return isValid;
	}
	
	function showFieldError(input) {
	  input.classList.add('error');
	}
	
	function clearFieldError(input) {
	  input.classList.remove('error');
	}
	
	// показ модального окна успеха
	function showSuccessModal() {
	  const successModal = document.getElementById('success-modal');
	  if (successModal) {
		successModal.classList.add('show');
		document.body.classList.add('body-lock');
	  }
	}
	
	// закрытие модального окна успеха
	function closeSuccessModal() {
	  const successModal = document.getElementById('success-modal');
	  if (successModal) {
		successModal.classList.remove('show');
		document.body.classList.remove('body-lock');
	  }
	}
	
	// обработка всех форм на странице
	document.addEventListener('DOMContentLoaded', function() {
	  const allForms = document.querySelectorAll('form');
	  
	  allForms.forEach(form => {
		// устанвока action и method для форм консультации
		if (form.classList.contains('consultation-form-content') || 
		    form.classList.contains('consultation-modal-content')) {
		  form.action = 'submit_consultation.php';
		  form.method = 'POST';
		}
		// устанвока action и method для промо-формы
		else if (form.classList.contains('promo-form')) {
		  form.action = 'submit_promo.php';
		  form.method = 'POST';
		}
		
		form.addEventListener('submit', function(e) {
		  e.preventDefault();
		  if (validateForm(form)) {
			// идикатор загрузки
			const submitBtn = form.querySelector('button[type="submit"]');
			const originalText = submitBtn.textContent;
			submitBtn.textContent = 'ОТПРАВКА...';
			submitBtn.disabled = true;
			
			// создание FormData для отправки
			const formData = new FormData(form);
			
			// определение endpoint для отправки
			const endpoint = form.classList.contains('promo-form') ? 'submit_promo.php' : 'submit_consultation.php';
			
			// отправка форму на сервер
			fetch(endpoint, {
			  method: 'POST',
			  body: formData
			})
			.then(response => {
			  if (response.ok) {
				// проверка URL на наличие параметров success/error
				const url = new URL(window.location);
				if (url.searchParams.has('success')) {
				  showSuccessModal();
				  form.reset();
				  // очистка URL от параметров
				  window.history.replaceState({}, '', window.location.pathname);
				} else if (url.searchParams.has('error')) {
				  const errorMessage = url.searchParams.get('error');
				  alert('Ошибка: ' + errorMessage);
				  // очитска URL от параметров
				  window.history.replaceState({}, '', window.location.pathname);
				} else {
				  // если нет параметров, перенаправляем на ту же страницу
				  window.location.href = response.url;
				}
			  } else {
				throw new Error('Ошибка сервера');
			  }
			})
			.catch(error => {
			  console.error('Ошибка:', error);
			  alert('Произошла ошибка при отправке формы. Попробуйте позже.');
			})
			.finally(() => {
			  // возвращаем кнопку
			  submitBtn.textContent = originalText;
			  submitBtn.disabled = false;
			});
		  }
		});
		
		// очистка ошибок при вводе
		const inputs = form.querySelectorAll('input');
		inputs.forEach(input => {
		  input.addEventListener('input', function() {
			if (this.classList.contains('error')) {
			  clearFieldError(this);
			}
		  });
		});
	  });
	  
	  // закрываем модального окна успеха по клику на фон
	  const successModal = document.getElementById('success-modal');
	  if (successModal) {
		successModal.addEventListener('click', function(e) {
		  if (e.target === successModal) {
			closeSuccessModal();
		  }
		});
	  }
	  
	  // проверка URL параметры при загрузке страницы
	  checkUrlParams();
	});
	
	// ф-ция для проверки URL параметров
	function checkUrlParams() {
	  const url = new URL(window.location);
	  if (url.searchParams.has('success')) {
		showSuccessModal();
		// очистка URL от параметров
		window.history.replaceState({}, '', window.location.pathname);
	  } else if (url.searchParams.has('error')) {
		const errorMessage = url.searchParams.get('error');
		alert('Ошибка: ' + errorMessage);
		// очистка URL от параметров
		window.history.replaceState({}, '', window.location.pathname);
	  }
	}
	
	// глобал функции для HTML
	window.closeSuccessModal = closeSuccessModal;
  })();

  // карточка специалиста, являющаяя ссылкой на страницу специалиста
  (function() {
	document.addEventListener('DOMContentLoaded', function() {
	  const specialistCards = document.querySelectorAll('.specialist-card-detailed');
	  
	  specialistCards.forEach(card => {
		// добавляем курсор pointer для всей карточки
		card.style.cursor = 'pointer';
		
		// добавляем обработку клика на всю карточку
		card.addEventListener('click', function(e) {
		  // проверяем, что клик не по ссылке внутри карточки
		  if (!e.target.closest('.specialist-link')) {
			// находим ссылку внутри карточки и переходим по ней
			const specialistLink = card.querySelector('.specialist-link');
			if (specialistLink) {
			  window.location.href = specialistLink.href;
			}
		  }
		});
		
		// добавляем hover эффект
		card.addEventListener('mouseenter', function() {
		  card.style.transform = 'translateY(-2px)';
		  card.style.transition = 'transform 0.2s ease';
		});
		
		card.addEventListener('mouseleave', function() {
		  card.style.transform = 'translateY(0)';
		});
	  });
	});
  })();
  