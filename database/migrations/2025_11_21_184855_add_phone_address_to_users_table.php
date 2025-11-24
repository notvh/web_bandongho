<?php
// database/migrations/xxxx_xx_xx_xxxxxx_add_phone_address_to_users_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('so_dien_thoai')->nullable()->after('email');
            $table->string('dia_chi')->nullable()->after('so_dien_thoai');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['so_dien_thoai', 'dia_chi']);
        });
    }
};