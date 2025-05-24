document.addEventListener("DOMContentLoaded", () => {
    console.log("profil.js loaded");  

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
                observer.unobserve(entry.target);
            }
            
        });
    });

    const elements = document.querySelectorAll('.reveal');
    elements.forEach(el => observer.observe(el));
});
