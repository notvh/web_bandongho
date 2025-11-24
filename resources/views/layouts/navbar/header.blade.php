<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PREDATORWATCH - Luxury Timepieces</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<header class="header">
    <div class="header-top">
        <div class="header-top-content">
            <span>✉ contact@predatorwatch.com</span>
            <span>⚡ MIỄN PHÍ VẬN CHUYỂN CHO ĐƠN HÀNG TRÊN 10 TRIỆU</span>
            <span>📞 1900 888 999</span>
        </div>
    </div>
    <div class="header-main">
        <div class="logo"><a href="/">PREDATORWATCH</a></div>

        <nav>
            <ul class="nav-menu" id="navMenu">
                <li class="nav-item">
                    <a href="{{ route('sanpham') }}" class="nav-link">
                        SẢN PHẨM
                        <span class="dropdown-arrow">▼</span>
                    </a>
                    <div class="mega-menu">
                        <div class="mega-menu-grid">
                            <div class="mega-menu-column">
                                <h4>Theo Thương Hiệu</h4>
                                <a href="#" class="mega-menu-item">Rolex</a>
                                <a href="#" class="mega-menu-item">Omega</a>
                                <a href="#" class="mega-menu-item">Patek Philippe</a>
                                <a href="#" class="mega-menu-item">Audemars Piguet</a>
                            </div>
                            <div class="mega-menu-column">
                                <h4>Theo Danh Mục </h4>
                                <a href="#" class="mega-menu-item">Đồng Hồ Lặn</a>
                                <a href="#" class="mega-menu-item">Đồng Hồ Quân Đội</a>
                                <a href="#" class="mega-menu-item">Đồng Hồ Thụy Sĩ</a>
                                <a href="#" class="mega-menu-item">Apple Watch</a>
                            </div>
                            <div class="mega-menu-column">
                                <h4>Mức giá </h4>
                                <a href="#" class="mega-menu-item">Trên 5 triệu</a>
                                <a href="#" class="mega-menu-item">Trên 10 triệu</a>
                                <a href="#" class="mega-menu-item">trên 15 triệu</a>
                                <a href="#" class="mega-menu-item">trên 50 triệu</a>
                            </div>

                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Nam

                    </a>

                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Nữ

                    </a>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Dịch Vụ
                        <span class="dropdown-arrow">▼</span>
                    </a>
                    <ul class="dropdown">
                        <li><a href="{{ route('lienhe') }}" class="dropdown-item">
                                Liên hệ
                                <span class="item-price"></span>
                            </a></li>

                    </ul>
                    </a>
                </li>


            </ul>
        </nav>

        <div class="header-actions">
            <form action="#" method="GET" class="search-box" id="searchBox">
                <input type="text" name="keyword" class="search-input" placeholder="Tìm kiếm...">

                <button type="button" class="action-btn" onclick="toggleSearch()">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
            
            <a class="action-btn" href="{{ route('giohang') }}">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>

            <button class="action-btn">
                <i class="fa-solid fa-heart"></i>
            </button>

            <li class="nav-item" id="logout">
                @guest
                <a href="{{ route('login') }}" class="nav-link">Login</a>
                @endguest
                @auth
                <a href="#" class="action-btn">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="dropdown-arrow">▼</span>
                </a>
                <ul class="dropdown">
                    @if(Auth::user()->role === 'admin')
                    <li><a href="{{ route('admin.dasboard') }}" class="dropdown-item">
                            Quản trị admin
                            @endif
                        </a></li>
                    <li><a href="#" class="dropdown-item">Hồ sơ</a></li>
                    <li style="color: red;"><a href="#" class="dropdown-item">Lịch sử đơn hàng</a></li>
                    <li style="color: red;"><a href="{{ route('dangxuat') }}" class="dropdown-item">Đăng xuất</a></li>
                </ul>
                @endauth
            </li>
            <button class="mobile-toggle" onclick="toggleMenu()">☰</button>
        </div>
    </div>
</header>