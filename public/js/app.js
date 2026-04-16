
// resources/js/app.js

// No import needed because of the CDN in app.blade.php
const lenis = new Lenis({
  duration: 1.2,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
  smoothWheel: true,
})

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)

document.addEventListener('DOMContentLoaded', function() {
    
    /* --- 1. Mobile Menu Logic --- */
    const menu = document.querySelector('#mobile-menu');
    const links = document.querySelector('.nav-links');

    if (menu && links) {
        menu.addEventListener('click', function() {
            menu.classList.toggle('active');
            links.classList.toggle('active');
        });

        // Close menu when a link is clicked
        document.querySelectorAll('.nav-links a').forEach(n => {
            n.addEventListener('click', () => {
                menu.classList.remove('active');
                links.classList.remove('active');
            });
        });
    }

    /* --- 2. Gallery Filter Logic --- */
    const filterButtons = document.querySelectorAll('.filter-pill');
    if (filterButtons.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Toggle active class on buttons
                const currentActive = document.querySelector('.filter-pill.active');
                if (currentActive) currentActive.classList.remove('active');
                button.classList.add('active');

                const filterValue = button.getAttribute('data-filter');
                const images = document.querySelectorAll('.gallery-img');

                images.forEach(img => {
                    if (filterValue === 'all' || img.classList.contains(filterValue)) {
                        img.style.display = 'block';
                        setTimeout(() => img.style.opacity = '1', 10);
                    } else {
                        img.style.opacity = '0';
                        setTimeout(() => img.style.display = 'none', 300);
                    }
                });
            });
        });
    }

    /* --- 3. Scroll Reveal Animation (The Watchman) --- */
    const observerOptions = {
        threshold: 0.10, // Slightly lower threshold for better mobile response
        rootMargin: "0px 0px -50px 0px" // Triggers slightly before the element hits the view
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("in-view");
                observer.unobserve(entry.target); 
            }
        });
    }, observerOptions);

    const sectionsToAnimate = document.querySelectorAll(".reveal-on-scroll");
    sectionsToAnimate.forEach((section) => {
        observer.observe(section);
    });
});

const observerOptions = {
    threshold: 0.2
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('in-view');
        }
    });
}, observerOptions);

document.querySelectorAll('.reveal-on-scroll').forEach(section => {
    observer.observe(section);
});