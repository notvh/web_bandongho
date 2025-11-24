 const wtProducts = [{
         id: 1,
         name: 'Submariner Date',
         brand: 'rolex',
         brandDisplay: 'Rolex',
         price: 285,
         movement: 'automatic',
         material: 'steel',
         size: 'medium',
         sizeDisplay: '41mm',
         image: 'data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="400" height="400"%3E%3Crect fill="%231a1a1a" width="400" height="400"/%3E%3Ccircle cx="200" cy="200" r="120" fill="%23333" stroke="%23d4af37" stroke-width="3"/%3E%3Ccircle cx="200" cy="200" r="90" fill="%231a1a1a" stroke="%23d4af37" stroke-width="2"/%3E%3Cline x1="200" y1="200" x2="200" y2="130" stroke="%23d4af37" stroke-width="4" stroke-linecap="round"/%3E%3Cline x1="200" y1="200" x2="250" y2="200" stroke="%23999" stroke-width="3" stroke-linecap="round"/%3E%3C/svg%3E',
         badge: 'Mới'
     },



 ];


 let wtCurrentProducts = [...wtProducts];

 function renderProducts() {
     const grid = document.getElementById('wtProductsGrid');

     if (wtCurrentProducts.length === 0) {
         grid.innerHTML = '<div class="wt-no-results">Không tìm thấy sản phẩm phù hợp với bộ lọc của bạn</div>';
         document.getElementById('wtProductCount').textContent = 'Không có sản phẩm';
         return;
     }

     grid.innerHTML = wtCurrentProducts.map(product => `
               
            `).join('');

     document.getElementById('wtProductCount').textContent = `Hiển thị ${wtCurrentProducts.length} sản phẩm`;
 }

 function toggleFilter(filterType, value) {
     const checkbox = document.getElementById(`wt${filterType.charAt(0).toUpperCase() + filterType.slice(1)}${value.charAt(0).toUpperCase() + value.slice(1)}`);

     if (wtActiveFilters[filterType].includes(value)) {
         wtActiveFilters[filterType] = wtActiveFilters[filterType].filter(v => v !== value);
         checkbox.checked = false;
     } else {
         wtActiveFilters[filterType].push(value);
         checkbox.checked = true;
     }

     applyFilters();
 }

 function applyPriceFilter() {
     const minPrice = parseFloat(document.getElementById('wtMinPrice').value) || 0;
     const maxPrice = parseFloat(document.getElementById('wtMaxPrice').value) || 1000;
     wtActiveFilters.minPrice = minPrice;
     wtActiveFilters.maxPrice = maxPrice;
     applyFilters();
 }

 function applyFilters() {
     wtCurrentProducts = wtProducts.filter(product => {
         const brandMatch = wtActiveFilters.brand.length === 0 || wtActiveFilters.brand.includes(product.brand);
         const movementMatch = wtActiveFilters.movement.length === 0 || wtActiveFilters.movement.includes(product.movement);
         const materialMatch = wtActiveFilters.material.length === 0 || wtActiveFilters.material.includes(product.material);
         const sizeMatch = wtActiveFilters.size.length === 0 || wtActiveFilters.size.includes(product.size);
         const priceMatch = product.price >= wtActiveFilters.minPrice && product.price <= wtActiveFilters.maxPrice;

         return brandMatch && movementMatch && materialMatch && sizeMatch && priceMatch;
     });

     renderProducts();
 }

 function clearAllFilters() {
     wtActiveFilters = {
         brand: [],
         movement: [],
         material: [],
         size: [],
         minPrice: 0,
         maxPrice: 1000
     };

     document.querySelectorAll('.wt-checkbox-input').forEach(checkbox => {
         checkbox.checked = false;
     });

     document.getElementById('wtMinPrice').value = 0;
     document.getElementById('wtMaxPrice').value = 1000;
     document.getElementById('wtSortSelect').value = 'default';

     wtCurrentProducts = [...wtProducts];
     renderProducts();
 }

 function sortProducts() {
     const sortValue = document.getElementById('wtSortSelect').value;

     switch (sortValue) {
         case 'price-low':
             wtCurrentProducts.sort((a, b) => a.price - b.price);
             break;
         case 'price-high':
             wtCurrentProducts.sort((a, b) => b.price - a.price);
             break;
         case 'name-asc':
             wtCurrentProducts.sort((a, b) => a.name.localeCompare(b.name));
             break;
         case 'name-desc':
             wtCurrentProducts.sort((a, b) => b.name.localeCompare(a.name));
             break;
         default:
             wtCurrentProducts = [...wtProducts];
             applyFilters();
             return;
     }

     renderProducts();
 }

 function toggleMobileFilter() {
     const sidebar = document.getElementById('wtFilterSidebar');
     sidebar.classList.toggle('wt-active');
 }

 function addToCart(productId) {
     const product = wtProducts.find(p => p.id === productId);
     alert(`Đã thêm "${product.name}" vào giỏ hàng!`);
 }

 // Initialize
 renderProducts();