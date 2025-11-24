 function toggleMenu() {
     const navMenu = document.getElementById('navMenu');
     navMenu.classList.toggle('active');
 }

 function toggleSearch() {
     const searchBox = document.getElementById('searchBox');
     searchBox.classList.toggle('active');
     if (searchBox.classList.contains('active')) {
         searchBox.querySelector('input').focus();
     }
 }

 // Mobile dropdown toggle
 const navItems = document.querySelectorAll('.nav-item');
 navItems.forEach(item => {
     item.addEventListener('click', function(e) {
         if (window.innerWidth <= 968) {
             e.stopPropagation();
             this.classList.toggle('active');
         }
     });
 });

 // Close menu when clicking outside
 document.addEventListener('click', function(e) {
     const navMenu = document.getElementById('navMenu');
     const mobileToggle = document.querySelector('.mobile-toggle');
     if (!navMenu.contains(e.target) && !mobileToggle.contains(e.target)) {
         navMenu.classList.remove('active');
     }
 });