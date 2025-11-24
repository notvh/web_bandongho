<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_orders_tables.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Bảng Đơn hàng tổng
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Người mua
            $table->decimal('tong_tien', 12, 2);
            $table->string('trang_thai')->default('pending'); // pending, processing, completed, cancelled
            $table->string('phuong_thuc_thanh_toan')->default('cod'); // cod, vnpay, momo
            
            // Thông tin giao hàng (lưu riêng tại thời điểm đặt để tránh user đổi địa chỉ profile làm sai lệch đơn cũ)
            $table->string('nguoi_nhan');
            $table->string('sdt_nhan');
            $table->string('dia_chi_giao');
            $table->text('ghi_chu')->nullable();
            
            $table->timestamps();
        });

        // Bảng Chi tiết sản phẩm trong đơn hàng
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products'); 
            $table->integer('so_luong');
            $table->decimal('don_gia', 12, 2); // Lưu giá tại thời điểm mua
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_details');
        Schema::dropIfExists('orders');
    }
};