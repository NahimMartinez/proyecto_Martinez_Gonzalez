document.addEventListener('scroll', () => {
    const parallaxSections = document.querySelectorAll('.seccion-paralaje');
    parallaxSections.forEach((section) => {
      const scrollPosition = window.scrollY;
      const offset = section.offsetTop;
      const speed = 0.5; // Ajusta la velocidad del efecto
      const yPos = (scrollPosition - offset) * speed;
      section.style.backgroundPosition = `center ${yPos}px`;
    });
  });
  const carousel = document.getElementById('featuredProductsCarousel');

  carousel.addEventListener('mouseenter', () => {
    document.body.classList.add('no-scroll');
  });
  
  carousel.addEventListener('mouseleave', () => {
    document.body.classList.remove('no-scroll');
  });