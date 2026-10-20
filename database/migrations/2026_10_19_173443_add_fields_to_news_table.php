
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('news', function (Blueprint $table) {
            $table->string('title')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->text('content')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropUnique(['slug']);
            $table->dropColumn([
                'title',
                'slug',
                'content',
                'image',
                'user_id',
            ]);
        });
    }
};
