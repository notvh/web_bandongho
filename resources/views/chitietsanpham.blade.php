
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite([
        'resources/css/layout/chitietsanpham.css'
    ])
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    @include('layouts.navbar.header')

        <!-- Product Section -->
        <div class="wtch-product-section">
            <!-- Gallery -->
            <div class="wtch-gallery-zone">
                
                <div class="wtch-main-image">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400'%3E%3Crect fill='%231a1a1a'/%3E%3Ctext x='50%25' y='50%25' text-anchor='middle' dy='.3em' fill='%23666' font-size='20'%3ERolex Submariner%3C/text%3E%3C/svg%3E" alt="Watch">
                    <button class="wtch-wishlist-btn" onclick="toggleWishlist(this)">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                        </svg>
                    </button>
                </div>
                
                <div class="wtch-thumbnail-row">
                    
                    <div class="wtch-thumb-item active">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect fill='%232a2a2a'/%3E%3C/svg%3E" alt="Thumb">
                    </div>
                    <div class="wtch-thumb-item">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect fill='%232a2a2a'/%3E%3C/svg%3E" alt="Thumb">
                    </div>
                    <div class="wtch-thumb-item">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect fill='%232a2a2a'/%3E%3C/svg%3E" alt="Thumb">
                    </div>
                    <div class="wtch-thumb-item">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect fill='%232a2a2a'/%3E%3C/svg%3E" alt="Thumb">
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class="wtch-details-zone">
                <span class="wtch-brand-tag">Thương hiệu: Rolex</span>
                <h1 class="wtch-product-title">Rolex Submariner Date 126610LN</h1>
                
                <div class="wtch-rating-zone">
                    <div class="wtch-stars">
                        <span class="wtch-star filled">★</span>
                        <span class="wtch-star filled">★</span>
                        <span class="wtch-star filled">★</span>
                        <span class="wtch-star filled">★</span>
                        <span class="wtch-star">★</span>
                    </div>
                    <span class="wtch-review-count">(128 đánh giá)</span>
                </div>

                <div class="wtch-price-zone">
                    <span class="wtch-current-price">245.000.000₫</span>
                    <span class="wtch-original-price">280.000.000₫</span>
                    <span class="wtch-discount-badge">-13%</span>
                </div>

                <!-- Color Selection -->
                <div class="wtch-attr-section">
                    <div class="wtch-attr-label">Màu dây</div>
                    <div class="wtch-color-options">
                        <div class="wtch-color-item selected" style="background: #1a1a1a;" onclick="selectColor(this)"></div>
                        <div class="wtch-color-item" style="background: #8B4513;" onclick="selectColor(this)"></div>
                        <div class="wtch-color-item" style="background: #C0C0C0;" onclick="selectColor(this)"></div>
                        <div class="wtch-color-item" style="background: #FFD700;" onclick="selectColor(this)"></div>
                    </div>
                </div>

                <!-- Size Selection -->
                <div class="wtch-attr-section">
                    <div class="wtch-attr-label">Kích thước</div>
                    <div class="wtch-size-options">
                        <div class="wtch-size-item" onclick="selectSize(this)">38mm</div>
                        <div class="wtch-size-item selected" onclick="selectSize(this)">40mm</div>
                        <div class="wtch-size-item" onclick="selectSize(this)">42mm</div>
                        <div class="wtch-size-item" onclick="selectSize(this)">44mm</div>
                    </div>
                </div>

                <!-- Quantity -->
                <div class="wtch-attr-section">
                    <div class="wtch-attr-label">Số lượng</div>
                    <div class="wtch-quantity-zone">
                        <div class="wtch-qty-control">
                            <button class="wtch-qty-btn" onclick="changeQty(-1)">−</button>
                            <input type="text" class="wtch-qty-input" value="1" id="qtyInput">
                            <button class="wtch-qty-btn" onclick="changeQty(1)">+</button>
                        </div>
                        <span style="color: #666; font-size: 14px;">Còn 5 sản phẩm</span>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="wtch-action-buttons">
                    <button class="wtch-btn-primary">Thêm vào giỏ hàng</button>
                    <button class="wtch-btn-secondary">Mua ngay</button>
                </div>

                <!-- Features -->
                <div class="wtch-features-grid">
                    <div class="wtch-feature-item">
                        <div class="wtch-feature-icon">✓</div>
                        <span class="wtch-feature-text">Bảo hành 5 năm</span>
                    </div>
                    <div class="wtch-feature-item">
                        <div class="wtch-feature-icon">⚡</div>
                        <span class="wtch-feature-text">Giao hàng miễn phí</span>
                    </div>
                    <div class="wtch-feature-item">
                        <div class="wtch-feature-icon">↻</div>
                        <span class="wtch-feature-text">Đổi trả 30 ngày</span>
                    </div>
                    <div class="wtch-feature-item">
                        <div class="wtch-feature-icon">★</div>
                        <span class="wtch-feature-text">Cam kết chính hãng</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Info Tabs -->
        <div class="wtch-info-tabs">
            <div class="wtch-tab-nav">
                <button class="wtch-tab-btn active" onclick="switchTab('desc')">Mô tả</button>
                <button class="wtch-tab-btn" onclick="switchTab('specs')">Thông số</button>
                <button class="wtch-tab-btn" onclick="switchTab('warranty')">Bảo hành</button>
            </div>
            <div class="wtch-tab-content active" id="tab-desc">
                <p>Rolex Submariner Date 126610LN là biểu tượng của sự sang trọng và đẳng cấp. Với thiết kế vượt thời gian, đồng hồ này không chỉ là một công cụ đo thời gian mà còn là một tuyên bố về phong cách sống.</p>
                <br>
                <p>Được chế tác từ thép không gỉ Oystersteel cao cấp, vỏ đồng hồ có độ bền vượt trội và khả năng chống ăn mòn tuyệt vời. Mặt số đen tuyền với các chỉ số Chromalight phát sáng trong bóng tối tạo nên vẻ đẹp huyền bí và nam tính.</p>
            </div>
            <div class="wtch-tab-content" id="tab-specs">
                <table class="wtch-specs-table">
                    <tr>
                        <td>Thương hiệu</td>
                        <td>Rolex</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>Submariner Date 126610LN</td>
                    </tr>
                    <tr>
                        <td>Bộ máy</td>
                        <td>Automatic 3235</td>
                    </tr>
                    <tr>
                        <td>Chất liệu vỏ</td>
                        <td>Oystersteel</td>
                    </tr>
                    <tr>
                        <td>Đường kính</td>
                        <td>41mm</td>
                    </tr>
                    <tr>
                        <td>Độ dày</td>
                        <td>12.5mm</td>
                    </tr>
                    <tr>
                        <td>Chống nước</td>
                        <td>300m</td>
                    </tr>
                    <tr>
                        <td>Dự trữ năng lượng</td>
                        <td>70 giờ</td>
                    </tr>
                </table>
            </div>
            <div class="wtch-tab-content" id="tab-warranty">
                <p>Sản phẩm được bảo hành chính hãng 5 năm toàn cầu. Bảo hành bao gồm các lỗi về máy móc và chế tạo. Không bảo hành cho các hư hỏng do va đập, sử dụng không đúng cách hoặc tác động của môi trường.</p>
                <br>
                <p>Trong thời gian bảo hành, khách hàng được hỗ trợ bảo dưỡng miễn phí 1 lần/năm tại các trung tâm bảo hành ủy quyền của Rolex.</p>
            </div>
        </div>

        <!-- Comments Section -->
        <div class="wtch-comments-section">
            <h2 class="wtch-section-title">Bình luận & Đánh giá</h2>
            
            <div class="wtch-comment-form">
                <textarea class="wtch-comment-input" placeholder="Nhập bình luận của bạn..."></textarea>
                <button class="wtch-comment-submit">Gửi bình luận</button>
            </div>

            <div class="wtch-comment-list">
                <div class="wtch-comment-item">
                    <div class="wtch-comment-header">
                        <div class="wtch-comment-author">
                            <div class="wtch-avatar">NT</div>
                            <div class="wtch-author-info">
                                <span class="wtch-author-name">Nguyễn Thành</span>
                                <span class="wtch-comment-date">2 ngày trước</span>
                            </div>
                        </div>
                        <div class="wtch-stars">
                            <span class="wtch-star filled">★</span>
                            <span class="wtch-star filled">★</span>
                            <span class="wtch-star filled">★</span>
                            <span class="wtch-star filled">★</span>
                            <span class="wtch-star filled">★</span>
                        </div>
                    </div>
                    <p class="wtch-comment-text">Sản phẩm tuyệt vời, đúng như mô tả. Giao hàng nhanh, đóng gói cẩn thận. Rất hài lòng với dịch vụ.</p>
                </div>

                <div class="wtch-comment-item">
                    <div class="wtch-comment-header">
                        <div class="wtch-comment-author">
                            <div class="wtch-avatar">LH</div>
                            <div class="wtch-author-info">
                                <span class="wtch-author-name">Lê Hùng</span>
                                <span class="wtch-comment-date">1 tuần trước</span>
                            </div>
                        </div>
                        <div class="wtch-stars">
                            <span class="wtch-star filled">★</span>
                            <span class="wtch-star filled">★</span>
                            <span class="wtch-star filled">★</span>
                            <span class="wtch-star filled">★</span>
                            <span class="wtch-star">★</span>
                        </div>
                    </div>
                    <p class="wtch-comment-text">Đồng hồ đẹp, chất lượng tốt. Tuy nhiên giá hơi cao so với thị trường. Nhưng tổng thể vẫn rất ưng ý.</p>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        <div class="wtch-related-section">
            
            <h2 class="wtch-section-title">Sản phẩm liên quan</h2>
            <div class="wtch-products-grid">
                <div class="wtch-product-card">
                    <div class="wtch-card-image">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 300 300'%3E%3Crect fill='%231a1a1a'/%3E%3Ctext x='50%25' y='50%25' text-anchor='middle' dy='.3em' fill='%23666' font-size='16'%3EOmega Seamaster%3C/text%3E%3C/svg%3E" alt="Product">
                        <span class="wtch-card-badge">-20%</span>
                    </div>
                    <div class="wtch-card-body">
                        <h3 class="wtch-card-title">Omega Seamaster Professional</h3>
                        <div class="wtch-card-price">
                            <span class="wtch-card-current">180.000.000₫</span>
                            <span class="wtch-card-original">225.000.000₫</span>
                        </div>
                    </div>
                </div>

                <div class="wtch-product-card">
                    <div class="wtch-card-image">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 300 300'%3E%3Crect fill='%231a1a1a'/%3E%3Ctext x='50%25' y='50%25' text-anchor='middle' dy='.3em' fill='%23666' font-size='16'%3ETag Heuer%3C/text%3E%3C/svg%3E" alt="Product">
                    </div>
                    <div class="wtch-card-body">
                        <h3 class="wtch-card-title">Tag Heuer Carrera Calibre</h3>
                        <div class="wtch-card-price">
                            <span class="wtch-card-current">120.000.000₫</span>
                        </div>
                    </div>
                </div>

                <div class="wtch-product-card">
                    <div class="wtch-card-image">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 300 300'%3E%3Crect fill='%231a1a1a'/%3E%3Ctext x='50%25' y='50%25' text-anchor='middle' dy='.3em' fill='%23666' font-size='16'%3EBreitling%3C/text%3E%3C/svg%3E" alt="Product">
                        <span class="wtch-card-badge">New</span>
                    </div>
                    <div class="wtch-card-body">
                        <h3 class="wtch-card-title">Breitling Navitimer B01</h3>
                        <div class="wtch-card-price">
                            <span class="wtch-card-current">195.000.000₫</span>
                        </div>
                    </div>
                </div>

                <div class="wtch-product-card">
                    <div class="wtch-card-image">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 300 300'%3E%3Crect fill='%231a1a1a'/%3E%3Ctext x='50%25' y='50%25' text-anchor='middle' dy='.3em' fill='%23666' font-size='16'%3EIWC%3C/text%3E%3C/svg%3E" alt="Product">
                        <span class="wtch-card-badge">-15%</span>
                    </div>
                    <div class="wtch-card-body">
                        <h3 class="wtch-card-title">IWC Portugieser Chronograph</h3>
                        <div class="wtch-card-price">
                            <span class="wtch-card-current">165.000.000₫</span>
                            <span class="wtch-card-original">194.000.000₫</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.navbar.footer')

    <script>
        function toggleWishlist(btn) {
            btn.classList.toggle('active');
            btn.style.color = btn.classList.contains('active') ? '#ff4336' : '#999';
        }

        function selectColor(item) {
            document.querySelectorAll('.wtch-color-item').forEach(i => i.classList.remove('selected'));
            item.classList.add('selected');
        }

        function selectSize(item) {
            document.querySelectorAll('.wtch-size-item').forEach(i => i.classList.remove('selected'));
            item.classList.add('selected');
        }

        function changeQty(amount) {
            const input = document.getElementById('qtyInput');
            let val = parseInt(input.value) || 1;
            val = Math.max(1, val + amount);
            val = Math.min(5, val);
            input.value = val;
        }

        function switchTab(tabName) {
            document.querySelectorAll('.wtch-tab-btn').forEach(btn => btn.classList.remove('active'));
            document.querySelectorAll('.wtch-tab-content').forEach(content => content.classList.remove('active'));
            
            event.target.classList.add('active');
            document.getElementById('tab-' + tabName).classList.add('active');
        }

        // Thumbnail gallery
        document.querySelectorAll('.wtch-thumb-item').forEach(thumb => {
            thumb.addEventListener('click', function() {
                document.querySelectorAll('.wtch-thumb-item').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
