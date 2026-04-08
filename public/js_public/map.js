document.querySelectorAll('area[data-type="shop"]').forEach(area => {
    area.addEventListener('click', () => {
        const shopId = area.dataset.id;
        console.log('Clicked shop:', shopId);
    });
});