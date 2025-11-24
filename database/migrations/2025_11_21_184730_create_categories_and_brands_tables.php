<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_categories_and_brands_tables.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Bảng Danh mục
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('ten_danhmuc');
            $table->string('slug')->nullable(); // URL thân thiện
            $table->text('mota')->nullable();
            $table->timestamps();
        });

        // Bảng Thương hiệu
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('ten_thuonghieu');
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('brands');
    }
};