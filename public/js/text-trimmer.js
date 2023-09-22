let pElements = document.querySelectorAll('.trim-text');
pElements.forEach(function(p) {
    if (p.textContent.length > 300) {
        p.textContent = p.textContent.slice(0, 300) + '...';
    }
});