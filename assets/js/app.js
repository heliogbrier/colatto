document.addEventListener('DOMContentLoaded', function () {
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
