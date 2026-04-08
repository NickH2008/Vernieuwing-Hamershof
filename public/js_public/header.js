// Collapse the header on downward scroll and restore it when scrolling up.
(function () {
    var header = document.querySelector('.header');

    if (!header) {
        return;
    }

    var lastScrollY = window.pageYOffset || 0;
    var compactThreshold = 40;
    var ticking = false;

    function updateHeaderState() {
        var currentScrollY = window.pageYOffset || document.documentElement.scrollTop || 0;
        var scrollingUp = currentScrollY < lastScrollY;
        var pastThreshold = currentScrollY > compactThreshold;

        if (scrollingUp || !pastThreshold) {
            header.classList.remove('is-compact');
        } else {
            header.classList.add('is-compact');
        }

        lastScrollY = currentScrollY;
        ticking = false;
    }

    function onScroll() {
        if (ticking) {
            return;
        }

        ticking = true;
        window.requestAnimationFrame(updateHeaderState);
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll);
    updateHeaderState();
})();

(function () {
    var menuBtn = document.getElementById('menuBtn');
    var sideMenu = document.getElementById('sideMenu');
    var closeBtn = document.getElementById('closeMenu');
    var backdrop = document.getElementById('menuBackdrop');

    if (!menuBtn || !sideMenu || !closeBtn || !backdrop) {
        return;
    }

    function openMenu() {
        sideMenu.classList.add('active');
        sideMenu.setAttribute('aria-hidden', 'false');
        backdrop.hidden = false;
        backdrop.classList.add('active');
        menuBtn.setAttribute('aria-expanded', 'true');
        document.body.classList.add('menu-open');
    }

    function closeMenu() {
        sideMenu.classList.remove('active');
        sideMenu.setAttribute('aria-hidden', 'true');
        backdrop.classList.remove('active');
        backdrop.hidden = true;
        menuBtn.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('menu-open');
    }

    menuBtn.addEventListener('click', openMenu);
    closeBtn.addEventListener('click', closeMenu);
    backdrop.addEventListener('click', closeMenu);

    sideMenu.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && sideMenu.classList.contains('active')) {
            closeMenu();
        }
    });
})();
