
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Banner - Đồng Hồ Cao Cấp</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/admin/banner.css', 'resources/js/admin/banner.js'])

</head>
<body class="min-h-screen p-4 md:p-6">
    <div class="max-w-6xl mx-auto">
        <header class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-white">Quản lý Banner</h1>
                <p class="text-gray-400 mt-2">Quản lý các banner quảng cáo cho cửa hàng đồng hồ</p>
            </div>
            <button id="addBannerBtn" class="btn-primary px-5 py-2.5 rounded-lg flex items-center gap-2">
                <i class="fas fa-plus"></i>
                Thêm Banner Mới
            </button>
        </header>
        
        <div class="glass-card p-6 mb-8 fade-in">
            <h2 class="text-xl font-semibold text-white mb-4">Thống kê Banner</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-gray-800 rounded-lg p-4 flex items-center gap-4">
                    <div class="bg-gray-700 p-3 rounded-full">
                        <i class="fas fa-image text-blue-400"></i>
                    </div>
                    <div>
                        <p class="text-gray-400 text-sm">Tổng số banner</p>
                        <p class="text-white text-2xl font-bold" id="totalBanners">0</p>
                    </div>
                </div>
                <div class="bg-gray-800 rounded-lg p-4 flex items-center gap-4">
                    <div class="bg-gray-700 p-3 rounded-full">
                        <i class="fas fa-play-circle text-green-400"></i>
                    </div>
                    <div>
                        <p class="text-gray-400 text-sm">Banner đang hoạt động</p>
                        <p class="text-white text-2xl font-bold" id="activeBanners">0</p>
                    </div>
                </div>
                <div class="bg-gray-800 rounded-lg p-4 flex items-center gap-4">
                    <div class="bg-gray-700 p-3 rounded-full">
                        <i class="fas fa-pause-circle text-yellow-400"></i>
                    </div>
                    <div>
                        <p class="text-gray-400 text-sm">Banner tạm dừng</p>
                        <p class="text-white text-2xl font-bold" id="inactiveBanners">0</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="glass-card p-6 fade-in">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
                <h2 class="text-xl font-semibold text-white">Danh sách Banner</h2>
                <div class="flex gap-2">
                    <select id="statusFilter" class="px-3 py-2 rounded-lg">
                        <option value="all">Tất cả trạng thái</option>
                        <option value="active">Đang hoạt động</option>
                        <option value="inactive">Tạm dừng</option>
                    </select>
                    <div class="relative">
                        <input type="text" id="searchBanner" placeholder="Tìm kiếm banner..." class="pl-10 pr-4 py-2 rounded-lg w-full md:w-64">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                </div>
            </div>
            
            <div id="bannersList" class="space-y-4">
                <!-- Banner items will be dynamically added here -->
                <div class="empty-state">
                    <i class="fas fa-images"></i>
                    <h3 class="text-xl mb-2">Chưa có banner nào</h3>
                    <p class="text-gray-500">Hãy thêm banner đầu tiên để bắt đầu</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal Thêm/Sửa Banner -->
    <div id="bannerModal" class="modal-overlay hidden">
        <div class="modal-content glass-card p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 id="modalTitle" class="text-xl font-semibold text-white">Thêm Banner Mới</h2>
                <button id="closeModal" class="text-gray-400 hover:text-white">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <form id="bannerForm">
                <input type="hidden" id="bannerId">
                
                <div class="form-group">
                    <label for="bannerTitle" class="form-label">Tiêu đề banner</label>
                    <input type="text" id="bannerTitle" class="w-full" placeholder="Nhập tiêu đề banner" required>
                </div>
                
                <div class="form-group">
                    <label for="bannerDescription" class="form-label">Mô tả</label>
                    <textarea id="bannerDescription" rows="3" class="w-full" placeholder="Nhập mô tả cho banner"></textarea>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div class="form-group">
                        <label for="bannerImage" class="form-label">URL hình ảnh</label>
                        <input type="text" id="bannerImage" class="w-full" placeholder="https://example.com/image.jpg" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="bannerLink" class="form-label">Liên kết đích</label>
                        <input type="text" id="bannerLink" class="w-full" placeholder="https://example.com">
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div class="form-group">
                        <label for="bannerStartDate" class="form-label">Ngày bắt đầu</label>
                        <input type="date" id="bannerStartDate" class="w-full" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="bannerEndDate" class="form-label">Ngày kết thúc</label>
                        <input type="date" id="bannerEndDate" class="w-full" required>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div class="form-group">
                        <label for="bannerPosition" class="form-label">Vị trí hiển thị</label>
                        <select id="bannerPosition" class="w-full">
                            <option value="top">Đầu trang</option>
                            <option value="middle">Giữa trang</option>
                            <option value="bottom">Cuối trang</option>
                            <option value="sidebar">Thanh bên</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="bannerStatus" class="form-label">Trạng thái</label>
                        <select id="bannerStatus" class="w-full">
                            <option value="active">Đang hoạt động</option>
                            <option value="inactive">Tạm dừng</option>
                        </select>
                    </div>
                </div>
                
                <div class="flex justify-end gap-3">
                    <button type="button" id="cancelBtn" class="px-4 py-2 rounded-lg border border-gray-600 text-gray-300 hover:bg-gray-700 transition">
                        Hủy bỏ
                    </button>
                    <button type="submit" class="btn-success px-5 py-2 rounded-lg flex items-center gap-2">
                        <i class="fas fa-save"></i>
                        Lưu Banner
                    </button>
                </div>
            </form>
        </div>
    </div>
    
</body>
