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