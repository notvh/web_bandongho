function handleNewsletter(event) {
    event.preventDefault();
    const btn = event.target.querySelector('.pw-newsletter-btn');
    const btnText = document.getElementById('btnText');
    const input = event.target.querySelector('.pw-newsletter-input');

    // Loading state
    btnText.innerHTML = '<div class="pw-loading-dots"><span></span><span></span><span></span></div>';
    btn.disabled = true;

    // Simulate API call
    setTimeout(() => {
        btnText.textContent = '✓ Đã đăng ký';
        btn.style.background = 'linear-gradient(135deg, #1a1a1a 0%, #0a0a0a 100%)';
        input.value = '';

        // Reset after 3 seconds
        setTimeout(() => {
            btnText.textContent = 'Gửi';
            btn.style.background = 'linear-gradient(135deg, #333333 0%, #111111 100%)';
            btn.disabled = false;
        }, 3000);
    }, 1500);
}

// Add smooth scroll behavior
document.querySelectorAll('.pw-footer-links a').forEach(link => {
    link.addEventListener('click', function(e) {
        if (this.getAttribute('href').startsWith('#')) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        }
    });
});

// Add parallax effect to decorations
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const decorations = document.querySelectorAll('.pw-footer-decoration');

    decorations.forEach((decoration, index) => {
        const speed = index === 0 ? 0.5 : 0.3;
        decoration.style.transform = `translateY(${scrolled * speed}px)`;
    });
});