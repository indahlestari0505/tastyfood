
document.addEventListener('DOMContentLoaded', () => {

    // MOBILE NAVIGATION
    const toggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.main-nav');

    const closeMenu = () => {
        nav?.classList.remove('open');
        toggle?.setAttribute('aria-expanded', 'false');
    };

    toggle?.addEventListener('click', () => {
        const open = nav.classList.toggle('open');

        toggle.setAttribute('aria-expanded', String(open));
        toggle.setAttribute(
            'aria-label',
            open ? 'Tutup menu' : 'Buka menu'
        );
    });

    nav?.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('click', event => {
        if (
            nav?.classList.contains('open') &&
            !nav.contains(event.target) &&
            !toggle?.contains(event.target)
        ) {
            closeMenu();
        }
    });

    document.addEventListener('keydown', event => {
        if (event.key === 'Escape') {
            closeMenu();
        }
    });

    // IMAGE SLIDER
    const slider = document.querySelector('[data-slider]');

    if (slider) {
        const images = [
            'img-2.png',
            'brooke-lark-1Rm9GLHV0UA-unsplash.jpg',
            'img-1.png',
            'brooke-lark-nBtmglfY0HU-unsplash.jpg',
            'sanket-shah-SVA7TyHxojY-unsplash.jpg',
            'ella-olsson-mmnKI8kMxpc-unsplash.jpg',
            'fathul-abrar-T-qI_MI2EMA-unsplash.jpg',
            'anna-pelzer-IGfIGP5ONV0-unsplash.jpg',
            'michele-blackwell-rAyCBQTH7ws-unsplash.jpg',
            'mariana-medvedeva-iNwCO9ycBlc-unsplash.jpg',
            'jonathan-borba-Gkc_xM3VY34-unsplash.jpg',
            'sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg'
        ];

        const image = slider.querySelector('.slider-image');
        const index = slider.querySelector('[data-slide-index]');

        let current = 0;

        const show = (step) => {
            current = (current + step + images.length) % images.length;

            image.src = `${window.location.origin}/assets/${images[current]}`;
            index.textContent = String(current + 1);
        };

        slider.querySelector('.prev')?.addEventListener('click', () => show(-1));
        slider.querySelector('.next')?.addEventListener('click', () => show(1));
    }

    // GALLERY LIGHTBOX
    const lightbox = document.querySelector('.lightbox');

    if (lightbox) {
        const preview = lightbox.querySelector('img');
        const closeButton = lightbox.querySelector('.lightbox-close');

        document.querySelectorAll('[data-gallery-image]').forEach(item => {
            item.addEventListener('click', () => {
                preview.src = item.dataset.galleryImage;
                lightbox.showModal();
            });
        });

        closeButton?.addEventListener('click', () => {
            lightbox.close();
        });

        lightbox.addEventListener('click', event => {
            if (event.target === lightbox) {
                lightbox.close();
            }
        });
    }

});
