const carouselSlides = document.querySelectorAll('.carousel-slide');

carouselSlides.forEach(slide => {
  slide.addEventListener('mouseover', () => {
    slide.style.transform = 'scale(1.1)';
    const tooltip = slide.querySelector('.tooltip');
    tooltip.style.visibility = 'visible';
  });

  slide.addEventListener('mouseout', () => {
    slide.style.transform = 'scale(1)';
    const tooltip = slide.querySelector('.tooltip');
    tooltip.style.visibility = 'hidden';
  });
});

document.getElementById('recomendado-link').addEventListener('click', function(event) {
  event.preventDefault(); // Previene el comportamiento por defecto del enlace
  document.getElementById('recomendado').scrollIntoView({ behavior: 'smooth' });
});

document.getElementById('terror-link').addEventListener('click', function(event) {
  event.preventDefault(); // Previene el comportamiento por defecto del enlace
  document.getElementById('terror').scrollIntoView({ behavior: 'smooth' });
});


document.getElementById('comedia-link').addEventListener('click', function(event) {
  event.preventDefault(); // Previene el comportamiento por defecto del enlace
  document.getElementById('comedia').scrollIntoView({ behavior: 'smooth' });
});


document.getElementById('accion-link').addEventListener('click', function(event) {
  event.preventDefault(); // Previene el comportamiento por defecto del enlace
  document.getElementById('accion').scrollIntoView({ behavior: 'smooth' });
});
