document.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.querySelector('.contact-wrapper');
    if (!wrapper) return;

    const $ = (s) => wrapper.querySelector(s);

    const form = $('#contactForm');
    const submitBtn = $('#submitBtn');
    const clearBtn = $('#clearBtn');
    const snack = $('#snack');
    const mapModal = $('#mapModal');

    // Thông báo
    const showSnack = (msg) => {
        snack.innerText = msg;
        snack.classList.add('show');
        setTimeout(() => snack.classList.remove('show'), 3000);
    };

    // Submit giả lập
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        submitBtn.innerText = '...';
        submitBtn.disabled = true;
        setTimeout(() => {
            showSnack('Gửi thành công!');
            form.reset();
            submitBtn.innerText = 'Gửi liên hệ';
            submitBtn.disabled = false;
        }, 1000);
    });

    // Map
    const openMap = $('#openMap');
    const closeMap = $('#closeMap');
    if (openMap) openMap.addEventListener('click', () => mapModal.classList.add('show'));
    if (closeMap) closeMap.addEventListener('click', () => mapModal.classList.remove('show'));

    // Clear
    clearBtn.addEventListener('click', () => form.reset());
});