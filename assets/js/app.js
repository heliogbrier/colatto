document.addEventListener('DOMContentLoaded', function () {
    initHeader();

    var accordions = document.querySelectorAll('.accordion');

    accordions.forEach(function (accordion) {
        var items = accordion.querySelectorAll('.accordion-item');

        items.forEach(function (item) {
            var trigger = item.querySelector('.accordion-trigger');
            var content = item.querySelector('.accordion-content');
            var icon = item.querySelector('.accordion-trigger svg');

            content.style.overflow = 'hidden';
            content.style.height = '0px';
            content.style.transition = 'height 0.3s ease';

            trigger.addEventListener('click', function () {
                var isOpen = item.classList.contains('is-open');

                if (isOpen) {
                    closeItem(item, content, icon);
                } else {
                    openItem(item, content, icon);
                }
            });
        });
    });

    function openItem(item, content, icon) {
        item.classList.add('is-open');
        content.style.height = content.scrollHeight + 'px';
        if (icon) {
            icon.style.transform = 'rotate(90deg)';
        }

        content.addEventListener('transitionend', function handler() {
            content.style.height = 'auto';
            content.removeEventListener('transitionend', handler);
        });
    }

    function closeItem(item, content, icon) {
        content.style.height = content.scrollHeight + 'px';

        requestAnimationFrame(function () {
            content.style.height = '0px';
        });

        item.classList.remove('is-open');
        if (icon) {
            icon.style.transform = 'rotate(0deg)';
        }
    }
});

function initHeader() {
    var header = document.getElementById('site-header');
    var headerBar = document.getElementById('site-header-bar');
    var toggle = document.getElementById('menu-toggle');
    var menu = document.getElementById('mobile-menu');

    if (!header) {
        return;
    }

    var SCROLL_THRESHOLD = 8;
    var ticking = false;

    function updateScrollState() {
        header.classList.toggle('is-scrolled', window.scrollY > SCROLL_THRESHOLD);
        ticking = false;
    }

    window.addEventListener('scroll', function () {
        if (!ticking) {
            window.requestAnimationFrame(updateScrollState);
            ticking = true;
        }
    }, { passive: true });

    updateScrollState();

    if (headerBar) {
        var updateHeaderOffset = function () {
            document.documentElement.style.setProperty('--header-height', headerBar.offsetHeight + 'px');
        };

        updateHeaderOffset();
        window.addEventListener('resize', updateHeaderOffset);
        window.addEventListener('load', updateHeaderOffset);
    }

    if (!toggle || !menu) {
        return;
    }

    function openMenu() {
        toggle.setAttribute('aria-expanded', 'true');
        toggle.setAttribute('aria-label', 'Fechar menu');
        menu.setAttribute('aria-hidden', 'false');
        menu.classList.add('is-open');
        menu.style.maxHeight = menu.scrollHeight + 'px';
        document.body.style.overflow = 'hidden';

        menu.addEventListener('transitionend', function handler(event) {
            if (event.propertyName === 'max-height') {
                menu.style.maxHeight = 'none';
                menu.removeEventListener('transitionend', handler);
            }
        });
    }

    function closeMenu(returnFocus) {
        menu.style.maxHeight = menu.scrollHeight + 'px';

        requestAnimationFrame(function () {
            menu.style.maxHeight = '0px';
        });

        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Abrir menu');
        menu.setAttribute('aria-hidden', 'true');
        menu.classList.remove('is-open');
        document.body.style.overflow = '';

        if (returnFocus) {
            toggle.focus();
        }
    }

    toggle.addEventListener('click', function () {
        var isOpen = toggle.getAttribute('aria-expanded') === 'true';

        if (isOpen) {
            closeMenu(false);
        } else {
            openMenu();
        }
    });

    menu.addEventListener('click', function (event) {
        if (event.target.closest('a')) {
            closeMenu(false);
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') {
            closeMenu(true);
        }
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth >= 768 && toggle.getAttribute('aria-expanded') === 'true') {
            closeMenu(false);
        }
    });
}
