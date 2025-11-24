<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng - TimeLuxe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite([
    'resources/css/checkout/giohang.css'
    ])
</head>

<body class="whcart_body_z19a">
    @include('layouts.navbar.header')
    <div class="whcart_page_shell_z19a">
        <div class="whcart_maxwrap_z19a">
            <main class="whcart_main_z19a">
                <section class="whcart_cart_block_z19a" aria-label="Nội dung giỏ hàng">
                    <div class="whcart_cart_inner_z19a">
                        <div class="whcart_cart_headerline_z19a">
                            <div>
                                <div class="whcart_cart_title_z19a">Giỏ hàng của bạn</div>
                                <div class="whcart_cart_subtitle_z19a">2 sản phẩm được chọn • Giao nhanh toàn quốc</div>
                            </div>
                            <div class="whcart_cart_badgepill_z19a">
                                <span class="whcart_cart_badge_dot_z19a"></span>
                                <span>Đảm bảo chính hãng</span>
                            </div>
                        </div>

                        <div class="whcart_cart_list_z19a">
                            <article class="whcart_cart_item_z19a">
                                <div class="whcart_cart_item_media_z19a">
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="2">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                        <polyline points="21 15 16 10 5 21"></polyline>
                                    </svg>
                                </div>
                                <div class="whcart_cart_item_textblock_z19a">
                                    <div class="whcart_cart_item_name_z19a">Laptop Gaming Predator Helios</div>
                                    <div class="whcart_cart_item_desc_z19a">Core i9 • RTX 4080 • 32GB RAM</div>
                                    <div class="whcart_cart_item_meta_z19a">
                                        <span class="whcart_cart_item_meta_tag_z19a">Mới 100%</span>
                                        <span class="whcart_cart_item_meta_tag_z19a">Bảo hành 2 năm</span>
                                    </div>
                                </div>
                                <div class="whcart_cart_item_controls_z19a">
                                    <div class="whcart_cart_item_priceblock_z19a">
                                        <div class="whcart_cart_item_price_z19a">65.000.000₫</div>
                                        <div class="whcart_cart_item_price_note_z19a">Đã bao gồm VAT</div>
                                    </div>
                                    <div>
                                        <div class="whcart_cart_item_qtywrap_z19a" aria-label="Số lượng">
                                            <button class="whcart_cart_item_qtybtn_z19a" type="button" aria-hidden="true">−</button>
                                            <input class="whcart_cart_item_qtyinput_z19a" type="number" value="1" min="1" />
                                            <button class="whcart_cart_item_qtybtn_z19a" type="button" aria-hidden="true">+</button>
                                        </div>
                                        <div class="whcart_cart_item_remove_z19a">Xóa</div>
                                    </div>
                                </div>
                            </article>

                            <article class="whcart_cart_item_z19a">
                                <div class="whcart_cart_item_media_z19a">
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="2">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                        <polyline points="21 15 16 10 5 21"></polyline>
                                    </svg>
                                </div>
                                <div class="whcart_cart_item_textblock_z19a">
                                    <div class="whcart_cart_item_name_z19a">Chuột Gaming Predator Cestus</div>
                                    <div class="whcart_cart_item_desc_z19a">16000 DPI • RGB Lighting</div>
                                    <div class="whcart_cart_item_meta_z19a">
                                        <span class="whcart_cart_item_meta_tag_z19a">Black</span>
                                    </div>
                                </div>
                                <div class="whcart_cart_item_controls_z19a">
                                    <div class="whcart_cart_item_priceblock_z19a">
                                        <div class="whcart_cart_item_price_z19a">1.500.000₫</div>
                                        <div class="whcart_cart_item_price_note_z19a">Đổi trả 7 ngày</div>
                                    </div>
                                    <div>
                                        <div class="whcart_cart_item_qtywrap_z19a" aria-label="Số lượng">
                                            <button class="whcart_cart_item_qtybtn_z19a" type="button" aria-hidden="true">−</button>
                                            <input class="whcart_cart_item_qtyinput_z19a" type="number" value="1" min="1" />
                                            <button class="whcart_cart_item_qtybtn_z19a" type="button" aria-hidden="true">+</button>
                                        </div>
                                        <div class="whcart_cart_item_remove_z19a">Xóa</div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="whcart_cart_footer_z19a">
                            <div class="whcart_cart_footer_link_z19a">← Tiếp tục xem sản phẩm</div>
                            <div class="whcart_cart_footer_hint_z19a">Miễn phí giao hàng với đơn từ 5.000.000₫</div>
                        </div>
                    </div>
                </section>

                <aside class="whcart_summary_block_z19a" aria-label="Tóm tắt đơn hàng">
                    <div class="whcart_summary_inner_z19a">
                        <div class="whcart_summary_title_z19a">Tóm tắt đơn hàng</div>

                        <div class="whcart_summary_rows_z19a">
                            <div class="whcart_summary_row_z19a">
                                <div class="whcart_summary_row_label_z19a">Tạm tính</div>
                                <div class="whcart_summary_row_value_z19a">66.500.000₫</div>
                            </div>
                            <div class="whcart_summary_row_z19a">
                                <div class="whcart_summary_row_label_z19a">Phí vận chuyển</div>
                                <div class="whcart_summary_row_value_z19a">Miễn phí</div>
                            </div>
                            <div class="whcart_summary_row_z19a">
                                <div class="whcart_summary_row_label_z19a">Giảm giá</div>
                                <div class="whcart_summary_row_value_z19a">0₫</div>
                            </div>
                            <div class="whcart_summary_row_z19a whcart_summary_row_important_z19a whcart_summary_row_total_z19a">
                                <div class="whcart_summary_row_label_z19a">Tổng cộng</div>
                                <div class="whcart_summary_row_value_z19a">66.500.000₫</div>
                            </div>
                        </div>

                        <div class="whcart_summary_coupon_z19a">
                            <div class="whcart_summary_coupon_label_z19a">Mã ưu đãi</div>
                            <div class="whcart_summary_coupon_fieldrow_z19a">
                                <input id="whcart_coupon_input_z19a" class="whcart_summary_coupon_input_z19a" type="text" placeholder="Nhập mã giảm giá">
                                <button type="button" class="whcart_summary_coupon_button_z19a">Áp dụng</button>
                            </div>
                        </div>

                        <div class="whcart_summary_notice_z19a">
                            Sản phẩm chính hãng Predator Group. Bảo hành điện tử toàn cầu.
                        </div>

                        <div class="whcart_summary_actions_z19a">
                            <button type="button" class="whcart_summary_btn_primary_z19a">
                                Tiến hành thanh toán
                            </button>
                            <button type="button" class="whcart_summary_btn_secondary_z19a">
                                Lưu giỏ hàng
                            </button>
                        </div>

                        <div class="whcart_summary_secure_z19a">
                            <div class="whcart_summary_secure_icon_z19a">✓</div>
                            <div>Bảo mật thanh toán chuẩn SSL</div>
                        </div>
                    </div>
                </aside>
            </main>
           
        </div>
         @include('layouts.navbar.footer')
    </div>
</body>