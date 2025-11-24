let nextButton = document.getElementById('next');
let prevButton = document.getElementById('prev');
let carousel = document.querySelector('.carousel');
let listHTML = document.querySelector('.carousel .list');
let seeMoreButtons = document.querySelectorAll('.seeMore');
let backButton = document.getElementById('back');

nextButton.onclick = function() {
    showSlider('next');
}
prevButton.onclick = function() {
    showSlider('prev');
}

let unAcceppClick;
let autoSlideInterval; // Biến để lưu ID của interval
const autoSlideTime = 3000; // Thời gian tự động chuyển slide (5000ms = 5 giây)

const showSlider = (type) => {
    // Dừng interval tự động chuyển slide mỗi khi hàm được gọi
    clearInterval(autoSlideInterval);

    nextButton.style.pointerEvents = 'none';
    prevButton.style.pointerEvents = 'none';

    carousel.classList.remove('next', 'prev');
    let items = document.querySelectorAll('.carousel .list .item');
    if (type === 'next') {
        listHTML.appendChild(items[0]);
        carousel.classList.add('next');
    } else {
        listHTML.prepend(items[items.length - 1]);
        carousel.classList.add('prev');
    }

    clearTimeout(unAcceppClick);
    unAcceppClick = setTimeout(() => {
        nextButton.style.pointerEvents = 'auto';
        prevButton.style.pointerEvents = 'auto';

        // Khởi động lại interval tự động sau khi hiệu ứng hoàn tất
        autoSlideInterval = setInterval(() => {
            showSlider('next');
        }, autoSlideTime);
    }, 2000); // Thời gian này (2000ms) là thời gian chờ cho hiệu ứng slide
}

backButton.onclick = function() {
    carousel.classList.remove('showDetail');
}

// Khởi động tự động chuyển slide lần đầu tiên
autoSlideInterval = setInterval(() => {
    showSlider('next');
}, autoSlideTime);