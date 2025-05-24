window.addEventListener('scroll', function () {
    const header = document.querySelector('header');
    const hero = document.getElementById('hero');

    if (hero) {
      const heroBottom = hero.offsetTop + hero.offsetHeight;

      if (window.scrollY < heroBottom) {
        header.classList.add('scrolled-hero');
      } else {
        header.classList.remove('scrolled-hero');
      }
    }
  });

  window.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('header');
    const hero = document.getElementById('hero');

    // Pastikan header langsung hijau jika di bagian hero
    if (hero && window.scrollY < (hero.offsetTop + hero.offsetHeight)) {
      header.classList.add('scrolled-hero');
    }
  });