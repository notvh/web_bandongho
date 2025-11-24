<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ Hỗ Trợ - PredatorWatch</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    @vite(['resources/css/layout/lienhe.css', 'resources/js/layout/lienhe.js'])
</head>
<body style="margin: 0; padding: 0;">
@extends('layouts.navbar.header')
    <div class="contact-wrapper">
        <div class="contact-ui-wrap">
            <header class="contact-ui-top">
                <div class="contact-ui-title-group">
                   
                    <div class="contact-ui-logo">PW</div>
                    <div class="contact-ui-heading">
                        <h1>Liên hệ</h1>
                        <p>Sẵn sàng hỗ trợ 24/7</p>
                    </div>
                </div>
                <div class="contact-ui-foot">
                    <div style="display:flex;gap:14px;align-items:center">
                        <div style="display:flex;flex-direction:column;align-items:flex-end">
                            <span style="font-weight:600;color:#eee">Giờ làm việc</span>
                            <span style="color:#9aa0a6">Thứ 2 - CN, 9:00 - 22:00</span>
                        </div>
                        <div style="width:1px;height:28px;background:rgba(255,255,255,0.03);margin-left:6px"></div>
                    </div>
                </div>
            </header>

            <section class="contact-ui-cols">
                <div class="contact-ui-card">
                    <h2 style="margin:0 0 8px 0;font-family:'Rubik',sans-serif;color:#fff;font-size:20px">Gửi tin nhắn</h2>
                    <p style="color:#9aa0a6;margin:0 0 16px 0">Chúng tôi sẽ phản hồi nhanh nhất có thể.</p>

                    <form id="contactForm" class="contact-ui-form" novalidate>
                        <div class="contact-ui-row">
                            <div class="contact-ui-col contact-ui-field">
                                <input id="name" name="name" type="text" placeholder=" " required />
                                <label class="contact-ui-label-float" for="name">Họ & tên</label>
                            </div>
                            <div class="contact-ui-col contact-ui-field">
                                <input id="phone" name="phone" type="text" placeholder=" " />
                                <label class="contact-ui-label-float" for="phone">Số điện thoại</label>
                            </div>
                        </div>

                        <div class="contact-ui-field">
                            <input id="email" name="email" type="email" placeholder=" " required />
                            <label class="contact-ui-label-float" for="email">Email</label>
                        </div>

                        <div class="contact-ui-field">
                            <textarea id="message" name="message" placeholder=" " required></textarea>
                            <label class="contact-ui-label-float" for="message">Nội dung...</label>
                        </div>

                        <div class="contact-ui-meta">
                            <div class="contact-ui-hint">Phản hồi trong 24h.</div>
                            <div style="display:flex;gap:8px;align-items:center">
                                <button type="button" class="contact-ui-btn" id="clearBtn">Xóa</button>
                                <button type="submit" class="contact-ui-btn primary" id="submitBtn">Gửi liên hệ</button>
                            </div>
                        </div>
                    </form>
                </div>

                <aside class="contact-ui-side">
                    <div class="contact-ui-map-wrap">
                        <div class="contact-ui-map-actions">
                            <button class="contact-ui-chip" id="openMap">Xem lớn</button>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.096814183571!2d105.85017631540237!3d21.028811885998357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSGFub2ksIEhvw6BuIEtp4bq1bSwgSGFub2ksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1647506000000!5m2!1sen!2s" loading="lazy"></iframe>
                    </div>

                    <div class="contact-ui-card contact-ui-info">
                        <div class="contact-ui-info-item">
                            <div class="contact-ui-icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="contact-ui-content">
                                <span class="contact-ui-label">Showroom</span>
                                <span class="contact-ui-value">123 Phố Huế, Hà Nội</span>
                            </div>
                        </div>
                        <div class="contact-ui-info-item">
                            <div class="contact-ui-icon"><i class="fa-solid fa-phone"></i></div>
                            <div class="contact-ui-content">
                                <span class="contact-ui-label">Hotline</span>
                                <span class="contact-ui-value" id="phoneText">0912 345 678</span>
                            </div>
                        </div>
                        <div class="contact-ui-info-item">
                            <div class="contact-ui-icon"><i class="fa-solid fa-envelope"></i></div>
                            <div class="contact-ui-content">
                                <span class="contact-ui-label">Email</span>
                                <span class="contact-ui-value" id="emailText">cskh@predator.vn</span>
                            </div>
                        </div>
                    </div>

                    <div class="contact-ui-foot">
                        <div>© <strong>Predator</strong></div>
                        <div class="contact-ui-socials">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </aside>
            </section>
        </div>
        
        <div class="contact-ui-modal" id="mapModal">
            <div class="contact-ui-modal-card">
                <iframe src="https://maps.google.com/maps?q=Hanoi%20Vietnam&t=&z=13&ie=UTF8&iwloc=&output=embed" style="width:100%;height:100%;border:0"></iframe>
            </div>
            <button class="contact-ui-close-btn" id="closeMap">Đóng</button>
        </div>

        <div class="contact-ui-snack" id="snack">Thông báo</div>
    </div>
    @extends('layouts.navbar.footer')
</body>
</html>