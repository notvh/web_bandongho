<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng Nhập & Đăng Ký</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>

  </style>
</head>

<body class="dangnhap1">
  @include('layouts.navbar.header')
  <div class="container">
    <div class="left-panel">
      <h1>Chào Mừng</h1>
      <p>Khám phá thế giới của chúng tôi với trải nghiệm đăng nhập an toàn và dễ dàng</p>
    </div>
    <div class="right-panel">
      <div class="form-container">
        <div class="form-toggle">
          <div class="toggle-btn active" data-target="login-form">Đăng Nhập</div>
          <div class="toggle-btn" data-target="register-form">Đăng Ký</div>
        </div>

        <form class="form active" id="login-form" action="{{ route('postdangnhap') }}" method="POST" novalidate>
          @if (session('message'))
          <div class="form-success">{{ session('message') }}</div>
          @endif
          @csrf
          <h2 class="form-title">Đăng Nhập</h2>
          <div class="input-group">
            <label for="login-email">Email</label>
            <input type="email" id="login-email" class="input-field" value="{{ old('email') }}" name="email" placeholder="Nhập email của bạn">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="input-group">
            <label for="login-password">Mật khẩu</label>
            <input type="password" id="login-password" name="password" class="input-field" placeholder="Nhập mật khẩu">
             @error('password')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="checkbox-group">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Ghi nhớ đăng nhập</label>
          </div>
          <button type="submit" class="submit-btn">Đăng Nhập</button>
          <a href="#" class="forgot-link">Quên mật khẩu?</a>

          <div class="divider">
            <span>Hoặc</span>
          </div>

          <button type="button" class="google-btn">
            <i class="fab fa-google google-icon"></i>

           <a href="{{ route('auth.google') }}">Đăng nhập với Google</a> 


          </button>
        </form>
        @include('auth.dangky')

      </div>
    </div>
  </div>
</body>

</html>