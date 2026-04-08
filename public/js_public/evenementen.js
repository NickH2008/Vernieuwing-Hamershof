document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('eventSearch');
    const filterButtons = Array.from(document.querySelectorAll('.filter-btn'));
    const eventCards = Array.from(document.querySelectorAll('.event-card'));
    const eventCount = document.getElementById('eventCount');

    function filterEvents() {
        const searchValue = searchInput.value.trim().toLowerCase();
        const activeCategory = document.querySelector('.filter-btn.active')?.dataset.category || 'Alle Evenementen';
        let visibleCount = 0;

        eventCards.forEach(card => {
            const cardCategory = card.dataset.category;
            const cardTitle = card.dataset.title.toLowerCase();

            const matchesCategory = activeCategory === 'Alle Evenementen' || cardCategory === activeCategory;
            const matchesSearch = !searchValue || cardTitle.includes(searchValue);
            const isVisible = matchesCategory && matchesSearch;

            card.style.display = isVisible ? '' : 'none';
            if (isVisible) {
                visibleCount += 1;
            }
        });

        eventCount.textContent = `${visibleCount} evenementen gevonden`;
    }

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            filterEvents();
        });
    });

    searchInput.addEventListener('input', filterEvents);
});
