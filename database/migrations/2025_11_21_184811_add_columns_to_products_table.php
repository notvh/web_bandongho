<?php
// database/migrations/xxxx_xx_xx_xxxxxx_add_columns_to_products_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Thêm cột ảnh và số lượng
            $table->string('hinh_anh')->nullable()->after('mota');
            $table->integer('so_luong')->default(0)->after('gia'); // Quản lý tồn kho
            $table->string('sku')->nullable()->after('id'); // Mã sản phẩm

            // Liên kết khóa ngoại (Foreign Keys)
            // Lưu ý: phải tạo bảng categories và brands trước khi chạy file này
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('set null');
            $table->foreignId('brand_id')->nullable()->constrained('brands')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropForeign(['brand_id']);
            $table->dropColumn(['hinh_anh', 'so_luong', 'sku', 'category_id', 'brand_id']);
        });
    }
};