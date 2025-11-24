<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bộ Sưu Tập Đồng Hồ Cao Cấp</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{-- Chỉ load file CSS, bỏ file JS --}}
    @vite([
        'resources/css/layout/sanpham.css'
    ])
</head>
@include('layouts.navbar.header')
    <div class="wt-main-container">
        <button class="wt-mobile-filter-toggle">
            ☰ Bộ Lọc Sản Phẩm
        </button>

        <div class="wt-content-wrapper">
            <aside class="wt-filter-sidebar" id="wtFilterSidebar">
                <div class="wt-filter-header">
                    <h3 class="wt-filter-title">Bộ Lọc</h3>
                    <button class="wt-clear-button">Xóa Tất Cả</button>
                </div>

                <div class="wt-filter-group">
                    <h4 class="wt-filter-group-title">Thương Hiệu</h4>
                    <div class="wt-filter-option">
                        <input type="checkbox" class="wt-checkbox-input" id="wtBrandRolex" value="rolex">
                        <label class="wt-checkbox-custom" for="wtBrandRolex"></label>
                        <span class="wt-filter-label">Rolex</span>
                    </div>
                    <div class="wt-filter-option">
                        <input type="checkbox" class="wt-checkbox-input" id="wtBrandOmega" value="omega">
                        <label class="wt-checkbox-custom" for="wtBrandOmega"></label>
                        <span class="wt-filter-label">Omega</span>
                    </div>
                    <div class="wt-filter-option">
                        <input type="checkbox" class="wt-checkbox-input" id="wtBrandPatek" value="patek">
                        <label class="wt-checkbox-custom" for="wtBrandPatek"></label>
                        <span class="wt-filter-label">Patek Philippe</span>
                    </div>
                    <div class="wt-filter-option">
                        <input type="checkbox" class="wt-checkbox-input" id="wtBrandAudemars" value="audemars">
                        <label class="wt-checkbox-custom" for="wtBrandAudemars"></label>
                        <span class="wt-filter-label">Audemars Piguet</span>
                    </div>
                    <div class="wt-filter-option">
                        <input type="checkbox" class="wt-checkbox-input" id="wtBrandCartier" value="cartier">
                        <label class="wt-checkbox-custom" for="wtBrandCartier"></label>
                        <span class="wt-filter-label">Cartier</span>
                    </div>
                </div>
                 <div class="wt-filter-group">
                    <h4 class="wt-filter-group-title">Giới tính </h4>
                    <div class="wt-filter-option">
                        <input type="checkbox" class="wt-checkbox-input" id="wtMovementAuto" value="automatic">
                        <label class="wt-checkbox-custom" for="wtMovementAuto"></label>
                        <span class="wt-filter-label">Nam</span>
                    </div>
                    <div class="wt-filter-option">
                        <input type="checkbox" class="wt-checkbox-input" id="wtMovementQuartz" value="quartz">
                        <label class="wt-checkbox-custom" for="wtMovementQuartz"></label>
                        <span class="wt-filter-label">Nữ</span>
                    </div>
                    
                </div>

                <div class="wt-filter-group">
                    <h4 class="wt-filter-group-title">Loại Máy</h4>
                    <div class="wt-filter-option">
                        <input type="checkbox" class="wt-checkbox-input" id="wtMovementAuto" value="automatic">
                        <label class="wt-checkbox-custom" for="wtMovementAuto"></label>
                        <span class="wt-filter-label">Automatic</span>
                    </div>
                    <div class="wt-filter-option">
                        <input type="checkbox" class="wt-checkbox-input" id="wtMovementQuartz" value="quartz">
                        <label class="wt-checkbox-custom" for="wtMovementQuartz"></label>
                        <span class="wt-filter-label">Quartz</span>
                    </div>
                    <div class="wt-filter-option">
                        <input type="checkbox" class="wt-checkbox-input" id="wtMovementManual" value="manual">
                        <label class="wt-checkbox-custom" for="wtMovementManual"></label>
                        <span class="wt-filter-label">Manual</span>
                    </div>
                </div>

                <div class="wt-filter-group">
                    <h4 class="wt-filter-group-title">Chất Liệu Vỏ</h4>
                    <div class="wt-filter-option">
                        <input type="checkbox" class="wt-checkbox-input" id="wtMaterialSteel" value="steel">
                        <label class="wt-checkbox-custom" for="wtMaterialSteel"></label>
                        <span class="wt-filter-label">Thép Không Gỉ</span>
                    </div>
                    <div class="wt-filter-option">
                        <input type="checkbox" class="wt-checkbox-input" id="wtMaterialGold" value="gold">
                        <label class="wt-checkbox-custom" for="wtMaterialGold"></label>
                        <span class="wt-filter-label">Vàng</span>
                    </div>
                    <div class="wt-filter-option">
                        <input type="checkbox" class="wt-checkbox-input" id="wtMaterialPlatinum" value="platinum">
                        <label class="wt-checkbox-custom" for="wtMaterialPlatinum"></label>
                        <span class="wt-filter-label">Bạch Kim</span>
                    </div>
                    <div class="wt-filter-option">
                        <input type="checkbox" class="wt-checkbox-input" id="wtMaterialTitanium" value="titanium">
                        <label class="wt-checkbox-custom" for="wtMaterialTitanium"></label>
                        <span class="wt-filter-label">Titanium</span>
                    </div>
                </div>

                <div class="wt-filter-group">
                    <h4 class="wt-filter-group-title">Kích Thước</h4>
                    <div class="wt-filter-option">
                        <input type="checkbox" class="wt-checkbox-input" id="wtSizeSmall" value="small">
                        <label class="wt-checkbox-custom" for="wtSizeSmall"></label>
                        <span class="wt-filter-label"> < 38mm</span>
                    </div>
                    <div class="wt-filter-option">
                        <input type="checkbox" class="wt-checkbox-input" id="wtSizeMedium" value="medium">
                        <label class="wt-checkbox-custom" for="wtSizeMedium"></label>
                        <span class="wt-filter-label">38-42mm</span>
                    </div>
                    <div class="wt-filter-option">
                        <input type="checkbox" class="wt-checkbox-input" id="wtSizeLarge" value="large">
                        <label class="wt-checkbox-custom" for="wtSizeLarge"></label>
                        <span class="wt-filter-label">> 42mm</span>
                    </div>
                </div>

                <div class="wt-filter-group">
                    <h4 class="wt-filter-group-title">Giá (Triệu VNĐ)</h4>
                    <div class="wt-price-range-slider">
                        <div class="wt-price-inputs">
                            <input type="number" class="wt-price-input" id="wtMinPrice" placeholder="Từ" value="0"> 
                        </div>
                    </div>
                </div>
            </aside>

            <main class="wt-products-section">
                <div class="wt-products-controls">
                    <span class="wt-products-count" id="wtProductCount">Hiển thị sản phẩm</span>
                    <select class="wt-sort-select" id="wtSortSelect">
                        <option value="default">Sắp Xếp Mặc Định</option>
                        <option value="price-low">Giá: Thấp đến Cao</option>
                        <option value="price-high">Giá: Cao đến Thấp</option>
                        <option value="name-asc">Tên: A-Z</option>
                        <option value="name-desc">Tên: Z-A</option>
                    </select>
                </div>

               <div class="wt-products-grid" id="wtProductsGrid">
                    
                    {{-- SẢN PHẨM 1: Thay div thành a --}}
                    <a href="{{ route('chitietsanpham') }}" class="wt-product-card">
                        <span class="wt-product-badge">MỚI</span>
                        <div class="wt-product-image-wrapper">
                             <img src="https://placehold.co/300x300" alt="Rolex Submariner" class="wt-product-image" >
                        </div>
                        <div class="wt-product-info">
                            <div class="wt-product-brand">ROLEX</div>
                            <h3 class="wt-product-name">Rolex Submariner Date</h3>
                            <div class="wt-product-specs">
                                <span class="wt-product-spec">⚙️ Automatic</span>
                                <span class="wt-product-spec">📏 41mm</span>
                                <span class="wt-product-spec">💎 Thép 904L</span>
                            </div>
                            <div class="wt-product-price-section">
                                <span class="wt-product-price">350.000.000 VNĐ</span>
                                <button class="wt-add-cart-button">Thêm</button>
                            </div>
                        </div>
                    </a>

                    {{-- SẢN PHẨM 2 --}}
                    <a href="/chi-tiet-san-pham" class="wt-product-card">
                        <div class="wt-product-image-wrapper">
                            <img src="https://placehold.co/300x300" alt="Omega Seamaster" class="wt-product-image">
                        </div>
                        <div class="wt-product-info">
                            <div class="wt-product-brand">OMEGA</div>
                            <h3 class="wt-product-name">Omega Seamaster Diver 300M</h3>
                            <div class="wt-product-specs">
                                <span class="wt-product-spec">⚙️ Automatic</span>
                                <span class="wt-product-spec">📏 42mm</span>
                                <span class="wt-product-spec">💎 Thép</span>
                            </div>
                            <div class="wt-product-price-section">
                                <span class="wt-product-price">130.000.000 VNĐ</span>
                                <button class="wt-add-cart-button">Thêm</button>
                            </div>
                        </div>
                    </a>

                    {{-- SẢN PHẨM 3 --}}
                     <a href="/chi-tiet-san-pham" class="wt-product-card">
                        <span class="wt-product-badge">HOT</span>
                        <div class="wt-product-image-wrapper">
                            <img src="https://placehold.co/300x300" alt="Patek Philippe Nautilus" class="wt-product-image">
                        </div>
                        <div class="wt-product-info">
                            <div class="wt-product-brand">PATEK PHILIPPE</div>
                            <h3 class="wt-product-name">Patek Philippe Nautilus 5711</h3>
                            <div class="wt-product-specs">
                                <span class="wt-product-spec">⚙️ Automatic</span>
                                <span class="wt-product-spec">📏 40mm</span>
                                <span class="wt-product-spec">💎 Thép</span>
                            </div>
                            <div class="wt-product-price-section">
                                <span class="wt-product-price">3.500.000.000 VNĐ</span>
                                <button class="wt-add-cart-button">Thêm</button>
                            </div>
                        </div>
                    </a>

                    {{-- SẢN PHẨM 4 --}}
                     <a href="/chi-tiet-san-pham" class="wt-product-card">
                        <div class="wt-product-image-wrapper">
                            <img src="https://placehold.co/300x300" alt="Audemars Piguet Royal Oak" class="wt-product-image">
                        </div>
                        <div class="wt-product-info">
                            <div class="wt-product-brand">AUDEMARS PIGUET</div>
                            <h3 class="wt-product-name">Royal Oak Selfwinding</h3>
                            <div class="wt-product-specs">
                                <span class="wt-product-spec">⚙️ Automatic</span>
                                <span class="wt-product-spec">📏 41mm</span>
                                <span class="wt-product-spec">💎 Vàng Hồng</span>
                            </div>
                            <div class="wt-product-price-section">
                                <span class="wt-product-price">1.200.000.000 VNĐ</span>
                                <button class="wt-add-cart-button">Thêm</button>
                            </div>
                        </div>
                    </a>
<a href="/chi-tiet-san-pham" class="wt-product-card">
                        <div class="wt-product-image-wrapper">
                            <img src="https://placehold.co/300x300" alt="Audemars Piguet Royal Oak" class="wt-product-image">
                        </div>
                        <div class="wt-product-info">
                            <div class="wt-product-brand">AUDEMARS PIGUET</div>
                            <h3 class="wt-product-name">Royal Oak Selfwinding</h3>
                            <div class="wt-product-specs">
                                <span class="wt-product-spec">⚙️ Automatic</span>
                                <span class="wt-product-spec">📏 41mm</span>
                                <span class="wt-product-spec">💎 Vàng Hồng</span>
                            </div>
                            <div class="wt-product-price-section">
                                <span class="wt-product-price">1.200.000.000 VNĐ</span>
                                <button class="wt-add-cart-button">Thêm</button>
                            </div>
                        </div>
                    </a>
                    <a href="/chi-tiet-san-pham" class="wt-product-card">
                        <div class="wt-product-image-wrapper">
                            <img src="https://placehold.co/300x300" alt="Audemars Piguet Royal Oak" class="wt-product-image">
                        </div>
                        <div class="wt-product-info">
                            <div class="wt-product-brand">AUDEMARS PIGUET</div>
                            <h3 class="wt-product-name">Royal Oak Selfwinding</h3>
                            <div class="wt-product-specs">
                                <span class="wt-product-spec">⚙️ Automatic</span>
                                <span class="wt-product-spec">📏 41mm</span>
                                <span class="wt-product-spec">💎 Vàng Hồng</span>
                            </div>
                            <div class="wt-product-price-section">
                                <span class="wt-product-price">1.200.000.000 VNĐ</span>
                                <button class="wt-add-cart-button">Thêm</button>
                            </div>
                        </div>
                    </a>
                </div>
                
                {{-- PHÂN TRANG --}}
                <div class="wt-pagination-wrapper">
                    <div class="wt-pagination">
                        <a href="#" class="wt-page-link active">1</a>
                        <a href="#" class="wt-page-link">2</a>
                        <a href="#" class="wt-page-link">3</a>
                        <a href="#" class="wt-page-link">4</a>
                        <a href="#" class="wt-page-link">5</a>
                        <a href="#" class="wt-page-link">6</a>
                        <a href="#" class="wt-page-link">7</a>
                        <a href="#" class="wt-page-link">8</a>
                        <a href="#" class="wt-page-link">9</a>
                        <a href="#" class="wt-page-link">10</a>
                        <a href="#" class="wt-page-link next"><i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </main>
        </div>
    </div>
    @include('layouts.navbar.footer')