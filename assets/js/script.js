document.addEventListener('DOMContentLoaded', function () {
  const menuToggle = document.getElementById('menu-toggle');
  const navbar = document.getElementById('navbar');
  const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

  // Toggle navbar
  menuToggle.addEventListener('click', function (e) {
    e.stopPropagation(); // mencegah bubbling ke document
    navbar.classList.toggle('active');

    // Jika navbar ditutup, sembunyikan semua dropdown
    if (!navbar.classList.contains('active')) {
      document.querySelectorAll('.dropdown').forEach(dropdown => {
        dropdown.classList.remove('open');
        const dropdownMenu = dropdown.querySelector('.dropdown-menu');
        if (dropdownMenu) dropdownMenu.style.display = 'none';
      });
    }
  });

  // Toggle dropdown
  dropdownToggles.forEach(function (toggle) {
    toggle.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation(); // mencegah klik luar menutup saat dibuka

      const parent = this.parentElement;
      const dropdownMenu = this.nextElementSibling;
      const isOpen = parent.classList.contains('open');

      // Tutup semua dropdown terlebih dahulu
      document.querySelectorAll('.dropdown').forEach(function (item) {
        item.classList.remove('open');
        const menu = item.querySelector('.dropdown-menu');
        if (menu) menu.style.display = 'none';
      });

      // Jika sebelumnya tidak terbuka, buka dropdown ini
      if (!isOpen) {
        parent.classList.add('open');
        if (dropdownMenu) dropdownMenu.style.display = 'block';
      }
    });
  });

  // Klik di luar menutup semua
  document.addEventListener('click', function (e) {
    const clickInsideNavbar = navbar.contains(e.target) || menuToggle.contains(e.target);

    if (!clickInsideNavbar) {
      // Tutup navbar
      navbar.classList.remove('active');

      // Tutup semua dropdown
      document.querySelectorAll('.dropdown').forEach(function (item) {
        item.classList.remove('open');
        const menu = item.querySelector('.dropdown-menu');
        if (menu) menu.style.display = 'none';
      });
    }
  });
});
