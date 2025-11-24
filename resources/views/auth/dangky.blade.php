<form class="form" id="register-form" action="{{ route('postdangky') }}" method="POST" novalidate>
    @if (session('message'))
    <div class="form-success">{{ session('message') }}</div>
    @endif
    @csrf
    <h2 class="form-title">Tạo Tài Khoản</h2>
    <div class="input-group">
        <label for="register-name">Họ và tên</label>
        <input type="text" id="register-name" name="name" class="input-field" placeholder="Nhập họ và tên" value="{{ old('name') }}">
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="input-group">
        <label for="register-email">Email</label>
        <input type="email" id="register-email" class="input-field" placeholder="Nhập email của bạn" name="email">
        @error('emal')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="input-group">
        <label for="register-password">Mật khẩu</label>
        <input type="password" id="register-password" name="password" class="input-field" placeholder="Tạo mật khẩu">
        @error('password')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="input-group">
        <label for="register-confirm-password">Xác nhận mật khẩu</label>
        <input type="password" id="register-confirm-password" name="password_confirmation" class="input-field" placeholder="Xác nhận mật khẩu">
    </div>
    <div class="checkbox-group">
        <input type="checkbox" id="agree-terms">
        <label for="agree-terms">Tôi đồng ý với các điều khoản và chính sách</label>
    </div>
    <button type="submit" class="submit-btn">Đăng Ký</button>

    <div class="divider">
        <span>Hoặc</span>
    </div>

    <button type="button" class="google-btn">
        <i class="fab fa-google google-icon"></i>
        Đăng ký với Google
    </button>
</form>