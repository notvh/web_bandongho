document.addEventListener('DOMContentLoaded', function() {
    const toggleBtns = document.querySelectorAll('.toggle-btn');
    const forms = document.querySelectorAll('.form');

    toggleBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault(); // Ngăn hành vi mặc định nếu là thẻ <a> hoặc <button type="submit">

            const targetFormId = this.getAttribute('data-target');

            // Cập nhật trạng thái nút toggle
            toggleBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            // Hiển thị form tương ứng
            forms.forEach(form => {
                if (form.id === targetFormId) {
                    form.classList.add('active');
                } else {
                    form.classList.remove('active');
                }
            });
        });
    });
});