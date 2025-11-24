// Sample data for demonstration
let banners = [{
        id: 1,
        title: "Đồng hồ Thụy Sĩ cao cấp",
        description: "Bộ sưu tập đồng hồ Thụy Sĩ chính hãng với giá tốt nhất",
        image: "https://images.unsplash.com/photo-1523170335258-f5ed11844a49?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1180&q=80",
        link: "#",
        startDate: "2023-09-01",
        endDate: "2023-12-31",
        position: "top",
        status: "active"
    },
    {
        id: 2,
        title: "Khuyến mãi đặc biệt mùa thu",
        description: "Giảm giá lên đến 30% cho tất cả các sản phẩm",
        image: "https://images.unsplash.com/photo-1547996160-81dfd58739c7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80",
        link: "#",
        startDate: "2023-10-01",
        endDate: "2023-11-30",
        position: "middle",
        status: "active"
    }
];

let editingBannerId = null;

// DOM Elements
const addBannerBtn = document.getElementById('addBannerBtn');
const bannerModal = document.getElementById('bannerModal');
const closeModal = document.getElementById('closeModal');
const cancelBtn = document.getElementById('cancelBtn');
const bannerForm = document.getElementById('bannerForm');
const bannersList = document.getElementById('bannersList');
const statusFilter = document.getElementById('statusFilter');
const searchBanner = document.getElementById('searchBanner');
const modalTitle = document.getElementById('modalTitle');
const totalBannersEl = document.getElementById('totalBanners');
const activeBannersEl = document.getElementById('activeBanners');
const inactiveBannersEl = document.getElementById('inactiveBanners');

// Initialize the app
function init() {
    updateBannersList();
    updateStatistics();

    // Event listeners
    addBannerBtn.addEventListener('click', openAddModal);
    closeModal.addEventListener('click', closeBannerModal);
    cancelBtn.addEventListener('click', closeBannerModal);
    bannerForm.addEventListener('submit', handleFormSubmit);
    statusFilter.addEventListener('change', updateBannersList);
    searchBanner.addEventListener('input', updateBannersList);
}

// Update banners list
function updateBannersList() {
    const statusFilterValue = statusFilter.value;
    const searchValue = searchBanner.value.toLowerCase();

    let filteredBanners = banners.filter(banner => {
        const matchesStatus = statusFilterValue === 'all' || banner.status === statusFilterValue;
        const matchesSearch = banner.title.toLowerCase().includes(searchValue) ||
            banner.description.toLowerCase().includes(searchValue);
        return matchesStatus && matchesSearch;
    });

    if (filteredBanners.length === 0) {
        bannersList.innerHTML = `
                    <div class="empty-state">
                        <i class="fas fa-search"></i>
                        <h3 class="text-xl mb-2">Không tìm thấy banner</h3>
                        <p class="text-gray-500">Thử thay đổi bộ lọc hoặc từ khóa tìm kiếm</p>
                    </div>`;
        return;
    }

    bannersList.innerHTML = filteredBanners.map(banner => `
                <div class="banner-preview slide-in">
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="md:w-1/4">
                            <div class="h-40 rounded-lg overflow-hidden">
                                <img src="${banner.image}" alt="${banner.title}" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <div class="md:w-3/4">
                            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-2">
                                <h3 class="text-lg font-semibold text-white">${banner.title}</h3>
                                <span class="${banner.status === 'active' ? 'status-active' : 'status-inactive'}">
                                    ${banner.status === 'active' ? 'Đang hoạt động' : 'Tạm dừng'}
                                </span>
                            </div>
                            <p class="text-gray-400 mb-3">${banner.description}</p>
                            <div class="flex flex-wrap gap-2 text-sm text-gray-500 mb-4">
                                <span><i class="fas fa-calendar-alt mr-1"></i> ${formatDate(banner.startDate)} - ${formatDate(banner.endDate)}</span>
                                <span><i class="fas fa-map-marker-alt mr-1"></i> ${getPositionName(banner.position)}</span>
                            </div>
                            <div class="flex gap-2">
                                <button class="btn-primary px-3 py-1.5 rounded text-sm flex items-center gap-1 edit-banner" data-id="${banner.id}">
                                <i class="fas fa-edit"></i> Sửa
                                </button>
                                <button class="btn-danger px-3 py-1.5 rounded text-sm flex items-center gap-1 delete-banner" data-id="${banner.id}">
                                    <i class="fas fa-trash"></i> Xóa
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            `).join('');

    // Add event listeners to edit and delete buttons
    document.querySelectorAll('.edit-banner').forEach(button => {
        button.addEventListener('click', (e) => {
            const id = parseInt(e.target.closest('.edit-banner').dataset.id);
            openEditModal(id);
        });
    });

    document.querySelectorAll('.delete-banner').forEach(button => {
        button.addEventListener('click', (e) => {
            const id = parseInt(e.target.closest('.delete-banner').dataset.id);
            deleteBanner(id);
        });
    });
}

// Update statistics
function updateStatistics() {
    const totalBanners = banners.length;
    const activeBanners = banners.filter(banner => banner.status === 'active').length;
    const inactiveBanners = totalBanners - activeBanners;

    totalBannersEl.textContent = totalBanners;
    activeBannersEl.textContent = activeBanners;
    inactiveBannersEl.textContent = inactiveBanners;
}

// Open modal for adding new banner
function openAddModal() {
    editingBannerId = null;
    modalTitle.textContent = "Thêm Banner Mới";
    bannerForm.reset();
    document.getElementById('bannerId').value = '';
    bannerModal.classList.remove('hidden');
}

// Open modal for editing banner
function openEditModal(id) {
    const banner = banners.find(b => b.id === id);
    if (!banner) return;

    editingBannerId = id;
    modalTitle.textContent = "Chỉnh sửa Banner";
    document.getElementById('bannerId').value = banner.id;
    document.getElementById('bannerTitle').value = banner.title;
    document.getElementById('bannerDescription').value = banner.description;
    document.getElementById('bannerImage').value = banner.image;
    document.getElementById('bannerLink').value = banner.link;
    document.getElementById('bannerStartDate').value = banner.startDate;
    document.getElementById('bannerEndDate').value = banner.endDate;
    document.getElementById('bannerPosition').value = banner.position;
    document.getElementById('bannerStatus').value = banner.status;

    bannerModal.classList.remove('hidden');
}

// Close banner modal
function closeBannerModal() {
    bannerModal.classList.add('hidden');
}

// Handle form submission
function handleFormSubmit(e) {
    e.preventDefault();

    const formData = {
        id: editingBannerId ? editingBannerId : generateId(),
        title: document.getElementById('bannerTitle').value,
        description: document.getElementById('bannerDescription').value,
        image: document.getElementById('bannerImage').value,
        link: document.getElementById('bannerLink').value,
        startDate: document.getElementById('bannerStartDate').value,
        endDate: document.getElementById('bannerEndDate').value,
        position: document.getElementById('bannerPosition').value,
        status: document.getElementById('bannerStatus').value
    };

    if (editingBannerId) {
        // Update existing banner
        const index = banners.findIndex(b => b.id === editingBannerId);
        if (index !== -1) {
            banners[index] = formData;
        }
    } else {
        // Add new banner
        banners.push(formData);
    }

    updateBannersList();
    updateStatistics();
    closeBannerModal();

    // Show success message
    showNotification(editingBannerId ? "Cập nhật banner thành công!" : "Thêm banner mới thành công!");
}

// Delete banner
function deleteBanner(id) {
    if (confirm("Bạn có chắc chắn muốn xóa banner này?")) {
        banners = banners.filter(b => b.id !== id);
        updateBannersList();
        updateStatistics();
        showNotification("Xóa banner thành công!");
    }
}

// Helper functions
function generateId() {
    return banners.length > 0 ? Math.max(...banners.map(b => b.id)) + 1 : 1;
}

function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString('vi-VN');
}

function getPositionName(position) {
    const positions = {
        'top': 'Đầu trang',
        'middle': 'Giữa trang',
        'bottom': 'Cuối trang',
        'sidebar': 'Thanh bên'
    };
    return positions[position] || position;
}

function showNotification(message) {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = 'fixed top-4 right-4 glass-card p-4 slide-in z-50';
    notification.innerHTML = `
                <div class="flex items-center gap-3">
                    <i class="fas fa-check-circle text-green-400"></i>
                    <span>${message}</span>
                </div>`;

    document.body.appendChild(notification);

    // Remove notification after 3 seconds
    setTimeout(() => {
        notification.classList.add('fade-out');
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 3000);
}

// Initialize the application
document.addEventListener('DOMContentLoaded', init);