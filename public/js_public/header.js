// Collapse the header on small downward scroll and restore it when scrolling up.
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
